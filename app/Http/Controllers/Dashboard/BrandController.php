<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('view brand');
        try {
            $brands = Brand::all();
            return view('dashboard.brands.index', compact('brands'));
        } catch (\Throwable $th) {
            Log::error('brands Index Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create brand');
        try {
            return view('dashboard.brands.create');
        } catch (\Throwable $th) {
            Log::error('brands Create Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->authorize('create brand');
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'logo' => 'required|image|mimes:jpeg,png,jpg,webp|max_size',
            'is_featured' => 'nullable|in:on',
        ]);

        if ($validator->fails()) {
            Log::error('Brand Validation Failed', [
                'errors' => $validator->errors()->toArray(),
            ]);
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {
            DB::beginTransaction();
            $isFeatured = isset($request->is_featured) && $request->is_featured == 'on' ? '1' : '0';
            $brand = new Brand();
            $brand->name = $request->name;
            $brand->is_featured = $isFeatured;

            if ($request->hasFile('logo')) {
                $Image = $request->file('logo');
                $Image_ext = $Image->getClientOriginalExtension();
                $Image_name = time() . '_logo.' . $Image_ext;

                $Image_path = 'uploads/brands';
                $Image->move(public_path($Image_path), $Image_name);
                $brand->logo = $Image_path . "/" . $Image_name;
            }

            $brand->save();

            DB::commit();
            return redirect()->route('dashboard.brands.index')->with('success', 'Brand Created Successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Brand Store Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $this->authorize('update brand');
        try {
            $brand = Brand::findOrFail($id);
            return view('dashboard.brands.edit', compact('brand'));
        } catch (\Throwable $th) {
            Log::error('brand Edit Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->authorize('update brand');
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'logo' => 'required|image|mimes:jpeg,png,jpg,webp|max_size',
            'is_featured' => 'nullable|in:on',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }
        try {
            $isFeatured = isset($request->is_featured) && $request->is_featured == 'on' ? '1' : '0';
            $brand = Brand::findOrFail($id);
            $brand->name = $request->name;
            $brand->is_featured = $isFeatured;

            if ($request->hasFile('logo')) {
                if (isset($brand->logo) && File::exists(public_path($brand->logo))) {
                    File::delete(public_path($brand->logo));
                }
                $Image = $request->file('logo');
                $Image_ext = $Image->getClientOriginalExtension();
                $Image_name = time() . '_logo.' . $Image_ext;

                $Image_path = 'uploads/brands';
                $Image->move(public_path($Image_path), $Image_name);
                $brand->logo = $Image_path . "/" . $Image_name;
            }

            $brand->save();

            return redirect()->route('dashboard.brands.index')->with('success', 'Brand Updated Successfully');
        } catch (\Throwable $th) {
            Log::error('Brand Update Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->authorize('delete brand');
        try {
            $brand = Brand::findOrFail($id);
            if (isset($brand->logo) && File::exists(public_path($brand->logo))) {
                File::delete(public_path($brand->logo));
            }
            $brand->delete();
            return redirect()->back()->with('success', 'Brand Deleted Successfully');
        } catch (\Throwable $th) {
            Log::error('Brand Delete Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    public function updateStatus(string $id)
    {
        $this->authorize('update brand');
        try {
            $brand = Brand::findOrFail($id);
            $message = $brand->is_active == 'active' ? 'Brand Deactivated Successfully' : 'Brand Activated Successfully';
            if ($brand->is_active == 'active') {
                $brand->is_active = 'inactive';
                $brand->save();
            } else {
                $brand->is_active = 'active';
                $brand->save();
            }
            return redirect()->back()->with('success', $message);
        } catch (\Throwable $th) {
            Log::error('Brand Status Updation Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
}

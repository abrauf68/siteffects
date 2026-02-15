<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('view service');
        try {
            $services = Service::all();
            return view('dashboard.services.index', compact('services'));
        } catch (\Throwable $th) {
            Log::error('Services Index Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create service');
        try {
            $uniqueFeatures = collect(Service::pluck('features'))
                ->map(function ($item) {
                    return json_decode($item, true); // Convert string to array
                })
                ->flatten()
                ->filter() // remove nulls
                ->unique()
                ->values()
                ->all();
                
            return view('dashboard.services.create', compact('uniqueFeatures'));
        } catch (\Throwable $th) {
            Log::error('Services Create Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->authorize('create service');
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'slug' => 'required|string|unique:company_services,slug',
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string|max:255',
            'details' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max_size',
            'is_featured' => 'nullable|in:on',
            'icon' => 'required|string|max:255',
            'position' => 'required|integer',
            'features' => 'nullable',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {
            DB::beginTransaction();
            $isFeatured = isset($request->is_featured) && $request->is_featured == 'on' ? '1' : '0';
            $service = new Service();
            $service->title = $request->name;
            $service->slug = $request->slug;
            $service->meta_title = $request->meta_title;
            $service->meta_description = $request->meta_description;
            $service->description = $request->details;
            $service->is_featured = $isFeatured;
            $service->icon = $request->icon;
            $service->position = $request->position;
            if($request->features)
            {
                $features = json_encode(
                    collect(json_decode($request->features, true))->pluck('value')->all()
                );
                $service->features = $features;
            }

            if ($request->hasFile('image')) {
                $Image = $request->file('image');
                $Image_ext = $Image->getClientOriginalExtension();
                $Image_name = time() . '_image.' . $Image_ext;

                $Image_path = 'uploads/company/services';
                $Image->move(public_path($Image_path), $Image_name);
                $service->image = $Image_path . "/" . $Image_name;
            }

            $service->save();

            DB::commit();
            return redirect()->route('dashboard.services.index')->with('success', 'Service Created Successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Service Store Failed', ['error' => $th->getMessage()]);
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
        $this->authorize('update service');
        try {
            $service = Service::findOrFail($id);
            return view('dashboard.services.edit', compact('service'));
        } catch (\Throwable $th) {
            Log::error('Service Edit Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->authorize('update service');
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'slug' => 'required|string|unique:company_services,slug,' . $id,
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string|max:255',
            'details' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max_size',
            'is_featured' => 'nullable|in:on',
            'icon' => 'required|string|max:255',
            'position' => 'required|integer',
            'features' => 'nullable',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }
        try {
            $isFeatured = isset($request->is_featured) && $request->is_featured == 'on' ? '1' : '0';
            $service = Service::findOrFail($id);
            $service->title = $request->name;
            $service->slug = $request->slug;
            $service->meta_title = $request->meta_title;
            $service->meta_description = $request->meta_description;
            $service->details = $request->details;
            $service->total_projects = $request->total_projects;
            $service->is_featured = $isFeatured;
            $service->icon = $request->icon;
            $service->position = $request->position;
            if($request->features)
            {
                $features = json_encode(
                    collect(json_decode($request->features, true))->pluck('value')->all()
                );
                $service->features = $features;
            }


            if ($request->hasFile('image')) {
                if (isset($service->image) && File::exists(public_path($service->image))) {
                    File::delete(public_path($service->image));
                }
                $Image = $request->file('image');
                $Image_ext = $Image->getClientOriginalExtension();
                $Image_name = time() . '_image.' . $Image_ext;

                $Image_path = 'uploads/company/services';
                $Image->move(public_path($Image_path), $Image_name);
                $service->image = $Image_path . "/" . $Image_name;
            }

            $service->save();

            return redirect()->route('dashboard.services.index')->with('success', 'Service Updated Successfully');
        } catch (\Throwable $th) {
            Log::error('Service Update Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->authorize('delete service');
        try {
            $service = Service::findOrFail($id);
            if (isset($service->image) && File::exists(public_path($service->image))) {
                File::delete(public_path($service->image));
            }
            $service->delete();
            return redirect()->back()->with('success', 'Service Deleted Successfully');
        } catch (\Throwable $th) {
            Log::error('Service Delete Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    public function updateServiceStatus(string $id)
    {
        $this->authorize('update service');
        try {
            $service = Service::findOrFail($id);
            $message = $service->is_active == 'active' ? 'Service Deactivated Successfully' : 'Service Activated Successfully';
            if ($service->is_active == 'active') {
                $service->is_active = 'inactive';
                $service->save();
            } else {
                $service->is_active = 'active';
                $service->save();
            }
            return redirect()->back()->with('success', $message);
        } catch (\Throwable $th) {
            Log::error('Service Status Updation Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
}

<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('view page');
        try {
            $pages = Page::all();
            return view('dashboard.pages.index', compact('pages'));
        } catch (\Throwable $th) {
            Log::error('Pages Index Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $this->authorize('update page');
        try {
            $page = Page::findOrFail($id);
            return view('dashboard.pages.edit', compact('page'));
        } catch (\Throwable $th) {
            Log::error('Page Edit Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->authorize('update page');
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:pages,slug,' . $id,
            'content' => 'nullable|string',
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string',
            'meta_keywords' => 'required|string',
            'author' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }
        try {
            $page = Page::findOrFail($id);
            $page->title = $request->title;
            $page->slug = $request->slug;
            $page->content = $request->content;
            $page->meta_title = $request->meta_title;
            $page->meta_description = $request->meta_description;
            $page->meta_keywords = $request->meta_keywords;
            $page->author = $request->author;
            $page->save();

            return redirect()->route('dashboard.pages.index')->with('success', 'Page Updated Successfully');
        } catch (\Throwable $th) {
            Log::error('Page Update Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

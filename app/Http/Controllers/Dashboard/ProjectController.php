<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('view project');
        try {
            $projects = Project::all();
            return view('dashboard.projects.index', compact('projects'));
        } catch (\Throwable $th) {
            Log::error('Projects Index Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create project');
        try {
            $uniqueFeatures = collect(Project::pluck('features'))
                ->map(function ($item) {
                    return json_decode($item, true); // Convert string to array
                })
                ->flatten()
                ->filter() // remove nulls
                ->unique()
                ->values()
                ->all();
                
            return view('dashboard.projects.create', compact('uniqueFeatures'));
        } catch (\Throwable $th) {
            Log::error('Projects Create Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->authorize('create project');
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:projects,slug',
            'main_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max_size',
            'scroll_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max_size',
            'live_url' => 'nullable|string|max:255',
            'client' => 'nullable|string|max:255',
            'technologies' => 'nullable|string|max:255',
            'completion_date' => 'nullable|date',
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string',
            'meta_keywords' => 'required|string',
            'description' => 'required',
            'features' => 'nullable',
            'category' => 'required|string|max:255',
            'is_featured' => 'nullable|in:on',
        ]);

        if ($validator->fails()) {
            Log::error('Project Validation Failed', [
                'errors' => $validator->errors()->toArray(),
            ]);
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }

        try {
            DB::beginTransaction();
            $lastPosition = Project::max('position');
            $isFeatured = isset($request->is_featured) && $request->is_featured == 'on' ? '1' : '0';
            $project = new Project();
            $project->title = $request->title;
            $project->slug = $request->slug;
            $project->live_url = $request->live_url;
            $project->client = $request->client;
            $project->technologies = $request->technologies;
            $project->completion_date = $request->completion_date;
            $project->meta_title = $request->meta_title;
            $project->meta_description = $request->meta_description;
            $project->meta_keywords = $request->meta_keywords;
            $project->description = $request->description;
            $project->is_featured = $isFeatured;
            $project->category = $request->category;
            $project->position = $lastPosition ? $lastPosition + 1 : 1;
            if($request->features)
            {
                $features = json_encode(
                    collect(json_decode($request->features, true))->pluck('value')->all()
                );
                $project->features = $features;
            }

            if ($request->hasFile('main_image')) {
                $Image = $request->file('main_image');
                $Image_ext = $Image->getClientOriginalExtension();
                $Image_name = time() . '_main_image.' . $Image_ext;

                $Image_path = 'uploads/company/projects';
                $Image->move(public_path($Image_path), $Image_name);
                $project->main_image = $Image_path . "/" . $Image_name;
            }

            if ($request->hasFile('scroll_image')) {
                $Image = $request->file('scroll_image');
                $Image_ext = $Image->getClientOriginalExtension();
                $Image_name = time() . '_scroll_image.' . $Image_ext;

                $Image_path = 'uploads/company/projects';
                $Image->move(public_path($Image_path), $Image_name);
                $project->scroll_image = $Image_path . "/" . $Image_name;
            }

            $project->save();

            DB::commit();
            return redirect()->route('dashboard.projects.index')->with('success', 'Project Created Successfully');
        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('Project Store Failed', ['error' => $th->getMessage()]);
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
        $this->authorize('update project');
        try {
            $project = Project::findOrFail($id);
            $uniqueFeatures = collect(Project::pluck('features'))
                ->map(function ($item) {
                    return json_decode($item, true); // Convert string to array
                })
                ->flatten()
                ->filter() // remove nulls
                ->unique()
                ->values()
                ->all();
            return view('dashboard.projects.edit', compact('project', 'uniqueFeatures'));
        } catch (\Throwable $th) {
            Log::error('Project Edit Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->authorize('update project');
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'slug' => 'required|string|unique:projects,slug,' . $id,
            'main_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max_size',
            'scroll_image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max_size',
            'live_url' => 'nullable|string|max:255',
            'client' => 'nullable|string|max:255',
            'technologies' => 'nullable|string|max:255',
            'completion_date' => 'nullable|date',
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string',
            'meta_keywords' => 'required|string',
            'description' => 'required',
            'features' => 'nullable',
            'category' => 'required|string|max:255',
            'is_featured' => 'nullable|in:on',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }
        try {
            $isFeatured = isset($request->is_featured) && $request->is_featured == 'on' ? '1' : '0';
            $project = Project::findOrFail($id);
            $project->title = $request->title;
            $project->slug = $request->slug;
            $project->live_url = $request->live_url;
            $project->client = $request->client;
            $project->technologies = $request->technologies;
            $project->completion_date = $request->completion_date;
            $project->meta_title = $request->meta_title;
            $project->meta_description = $request->meta_description;
            $project->meta_keywords = $request->meta_keywords;
            $project->description = $request->description;
            $project->is_featured = $isFeatured;
            $project->category = $request->category;
            if($request->features)
            {
                $features = json_encode(
                    collect(json_decode($request->features, true))->pluck('value')->all()
                );
                $project->features = $features;
            }

            if ($request->hasFile('main_image')) {
                if (isset($project->main_image) && File::exists(public_path($project->main_image))) {
                    File::delete(public_path($project->main_image));
                }
                $Image = $request->file('main_image');
                $Image_ext = $Image->getClientOriginalExtension();
                $Image_name = time() . '_main_image.' . $Image_ext;

                $Image_path = 'uploads/company/projects';
                $Image->move(public_path($Image_path), $Image_name);
                $project->main_image = $Image_path . "/" . $Image_name;
            }

            if ($request->hasFile('scroll_image')) {
                if (isset($project->scroll_image) && File::exists(public_path($project->scroll_image))) {
                    File::delete(public_path($project->scroll_image));
                }
                $Image = $request->file('scroll_image');
                $Image_ext = $Image->getClientOriginalExtension();
                $Image_name = time() . '_scroll_image.' . $Image_ext;

                $Image_path = 'uploads/company/projects';
                $Image->move(public_path($Image_path), $Image_name);
                $project->scroll_image = $Image_path . "/" . $Image_name;
            }

            $project->save();

            return redirect()->route('dashboard.projects.index')->with('success', 'Project Updated Successfully');
        } catch (\Throwable $th) {
            Log::error('Project Update Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->authorize('delete project');
        try {
            $project = Project::findOrFail($id);
            if (isset($project->main_image) && File::exists(public_path($project->main_image))) {
                File::delete(public_path($project->main_image));
            }
            if (isset($project->scroll_image) && File::exists(public_path($project->scroll_image))) {
                File::delete(public_path($project->scroll_image));
            }
            $project->delete();
            return redirect()->back()->with('success', 'Project Deleted Successfully');
        } catch (\Throwable $th) {
            Log::error('Project Delete Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    public function updateStatus(string $id)
    {
        $this->authorize('update project');
        try {
            $project = Project::findOrFail($id);
            $message = $project->is_active == 'active' ? 'Project Deactivated Successfully' : 'Project Activated Successfully';
            if ($project->is_active == 'active') {
                $project->is_active = 'inactive';
                $project->save();
            } else {
                $project->is_active = 'active';
                $project->save();
            }
            return redirect()->back()->with('success', $message);
        } catch (\Throwable $th) {
            Log::error('Project Status Updation Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    public function shuffleShow()
    {
        try {
            $this->authorize('update project');
            $projects = Project::orderBy('position', 'asc')->get();
            return view('dashboard.projects.shuffle', compact('projects'));
        } catch (\Throwable $th) {
            Log::error('Projects Shuffle Show Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
    public function shuffleStore(Request $request)
    {
        $this->authorize('update project');
        $validator = Validator::make($request->all(), [
            'ids' => 'required|array',
            'ids.*' => 'exists:projects,id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation Error!',
            ], 404);
        }
        try {
            foreach ($request->ids as $index => $projectId) {
                Project::where('id', $projectId)->update(['position' => $index + 1]);
            }
            return response()->json([
                'success' => true,
                'message' => 'Projects Shuffled Successfully!',
            ], 200);
        } catch (\Throwable $th) {
            Log::error('Projects Shuffle Store Failed', ['error' => $th->getMessage()]);
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong! Please try again later',
            ], 404);
            throw $th;
        }
    }
}

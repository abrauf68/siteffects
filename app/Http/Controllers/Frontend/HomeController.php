<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Service;
use App\Models\ServiceFaq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function home()
    {
        try {
            return view('frontend.pages.home');
        } catch (\Throwable $th) {
            //throw $th;
            Log::error('Error loading home page: ' . $th->getMessage());
            return redirect()->back()->with('error', 'An error occurred while loading the home page.');
        }
    }

    public function about()
    {
        try {
            return view('frontend.pages.about');
        } catch (\Throwable $th) {
            //throw $th;
            Log::error('Error loading about page: ' . $th->getMessage());
            return redirect()->back()->with('error', 'An error occurred while loading the about page.');
        }
    }

    public function services($slug = null)
    {
        try {
            $services = Service::where('is_active', 'active')->get();
            if ($slug != null) {
                $service = Service::where('slug', $slug)->where('is_active', 'active')->first();
                $nextService = Service::where('id', '>', $service->id)->where('is_active', 'active')->orderBy('id')->first();
                if(!$nextService){
                    $nextService = Service::where('is_active', 'active')->orderBy('id')->first();
                }
                $previousService = Service::where('id', '<', $service->id)->where('is_active', 'active')->orderBy('id', 'desc')->first();
                if(!$previousService){
                    $previousService = Service::where('is_active', 'active')->orderBy('id', 'desc')->first();
                }
                $serviceFaqs = ServiceFaq::where('service_id', $service->id)->where('is_active', 'active')->get();
                return view('frontend.pages.service-details', compact('service', 'services', 'nextService', 'previousService', 'serviceFaqs'));
            }
            return view('frontend.pages.services', compact('services'));
        } catch (\Throwable $th) {
            //throw $th;
            Log::error('Error loading services page: ' . $th->getMessage());
            return redirect()->back()->with('error', 'An error occurred while loading the services page.');
        }
    }

    public function projects($category = null, $projectSlug = null)
    {
        try {
            $projects = Project::where('is_active', 'active')->get();
            if ($category != null && $projectSlug == null) {
                $projects = Project::where('category', $category)->where('is_active', 'active')->get();
                return view('frontend.pages.projects', compact('projects'));
            }
            if ($category != null && $projectSlug != null) {
                $project = Project::where('slug', $projectSlug)->where('category', $category)->where('is_active', 'active')->first();
                $nextProject = Project::where('id', '>', $project->id)->where('is_active', 'active')->orderBy('id')->first();
                if(!$nextProject){
                    $nextProject = Project::where('is_active', 'active')->orderBy('id')->first();
                }
                $previousProject = Project::where('id', '<', $project->id)->where('is_active', 'active')->orderBy('id', 'desc')->first();
                if(!$previousProject){
                    $previousProject = Project::where('is_active', 'active')->orderBy('id', 'desc')->first();
                }
                return view('frontend.pages.project-details', compact('project', 'projects', 'nextProject', 'previousProject'));
            }
            return view('frontend.pages.projects', compact('projects'));
        } catch (\Throwable $th) {
            //throw $th;
            Log::error('Error loading projects page: ' . $th->getMessage());
            return redirect()->back()->with('error', 'An error occurred while loading the projects page.');
        }
    }
}

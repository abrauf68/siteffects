<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Contact;
use App\Models\Project;
use App\Models\Service;
use App\Models\ServiceFaq;
use App\Models\NewsLetter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function home()
    {
        try {
            $services = Service::where('is_active', 'active')
                ->where('is_featured', '1')
                ->orderByRaw('position IS NULL')
                ->orderBy('position', 'asc')
                ->get();
            $projects = Project::where('is_active', 'active')
                ->where('is_featured', '1')
                ->orderByRaw('position IS NULL')
                ->orderBy('position', 'asc')
                ->get();
            $allServices = Service::where('is_active', 'active')->get();
            $brands = Brand::where('is_active', 'active')->where('is_featured', '1')->get();
            return view('frontend.pages.home', compact('services', 'projects', 'allServices', 'brands'));
        } catch (\Throwable $th) {
            //throw $th;
            Log::error('Error loading home page: ' . $th->getMessage());
            return redirect()->back()->with('error', 'An error occurred while loading the home page.');
        }
    }

    public function about()
    {
        try {
            $brands = Brand::where('is_active', 'active')->where('is_featured', '1')->get();
            return view('frontend.pages.about', compact('brands'));
        } catch (\Throwable $th) {
            //throw $th;
            Log::error('Error loading about page: ' . $th->getMessage());
            return redirect()->back()->with('error', 'An error occurred while loading the about page.');
        }
    }

    public function contact()
    {
        try {
            $services = Service::where('is_active', 'active')->get();
            return view('frontend.pages.contact', compact('services'));
        } catch (\Throwable $th) {
            //throw $th;
            Log::error('Error loading contact page: ' . $th->getMessage());
            return redirect()->back()->with('error', 'An error occurred while loading the contact page.');
        }
    }

    public function contactSubmit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'nullable|string|max:20',
                'message' => 'nullable|string',
                'service_id' => 'required|exists:services,id',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }
        try {

            $contact = new Contact();
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->phone = $request->phone;
            $contact->message = $request->message;
            $contact->service_id = $request->service_id;
            $contact->save();

            return redirect()->back()->with('success', 'Your message has been sent successfully!');
        } catch (\Throwable $th) {
            //throw $th;
            Log::error('Error submitting contact form: ' . $th->getMessage());
            return redirect()->back()->with('error', 'An error occurred while submitting the contact form. Please try again later.');
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

    public function newsletterStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())
                ->with('error', $validator->errors()->first());
        }
        try {
            $newsletter = NewsLetter::where('email', $request->email)->first();
            if ($newsletter) {
                return redirect()->back()->with('error', 'You are already subscribed to our newsletter.');
            }
            $newsletter = new NewsLetter();
            $newsletter->email = $request->email;
            $newsletter->save();

            return redirect()->back()->with('success', 'You have successfully subscribed to our newsletter.');
        } catch (\Throwable $th) {
            Log::error('NewsLetter Store Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
}

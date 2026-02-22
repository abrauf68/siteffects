<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogComment;
use App\Models\Brand;
use App\Models\Contact;
use App\Models\Project;
use App\Models\Service;
use App\Models\ServiceFaq;
use App\Models\NewsLetter;
use App\Models\Page;
use App\Models\Profile;
use App\Models\Quote;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
            $allServices = Service::where('is_active', 'active')->orderByRaw('position IS NULL')->orderBy('position', 'asc')->get();
            $brands = Brand::where('is_active', 'active')->where('is_featured', '1')->get();
            $page = Page::where('page_name', 'home')->first();
            return view('frontend.pages.home', compact('services', 'projects', 'allServices', 'brands', 'page'));
        } catch (\Throwable $th) {
            //throw $th;
            Log::error('Error loading home page: ' . $th->getMessage());
            return redirect()->back()->with('error', 'An error occurred while loading the home page.');
        }
    }

    public function about()
    {
        try {
            $page = Page::where('page_name', 'about')->first();
            $brands = Brand::where('is_active', 'active')->where('is_featured', '1')->get();
            return view('frontend.pages.about', compact('brands', 'page'));
        } catch (\Throwable $th) {
            //throw $th;
            Log::error('Error loading about page: ' . $th->getMessage());
            return redirect()->back()->with('error', 'An error occurred while loading the about page.');
        }
    }

    public function contact()
    {
        try {
            $page = Page::where('page_name', 'contact')->first();
            $services = Service::where('is_active', 'active')->get();
            return view('frontend.pages.contact', compact('services','page'));
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
                if (!$nextService) {
                    $nextService = Service::where('is_active', 'active')->orderBy('id')->first();
                }
                $previousService = Service::where('id', '<', $service->id)->where('is_active', 'active')->orderBy('id', 'desc')->first();
                if (!$previousService) {
                    $previousService = Service::where('is_active', 'active')->orderBy('id', 'desc')->first();
                }
                $serviceFaqs = ServiceFaq::where('service_id', $service->id)->where('is_active', 'active')->get();
                return view('frontend.pages.service-details', compact('service', 'services', 'nextService', 'previousService', 'serviceFaqs'));
            }
            $page = Page::where('page_name', 'services')->first();
            return view('frontend.pages.services', compact('services','page'));
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
                if (!$nextProject) {
                    $nextProject = Project::where('is_active', 'active')->orderBy('id')->first();
                }
                $previousProject = Project::where('id', '<', $project->id)->where('is_active', 'active')->orderBy('id', 'desc')->first();
                if (!$previousProject) {
                    $previousProject = Project::where('is_active', 'active')->orderBy('id', 'desc')->first();
                }
                return view('frontend.pages.project-details', compact('project', 'projects', 'nextProject', 'previousProject'));
            }
            $page = Page::where('page_name', 'projects')->first();
            return view('frontend.pages.projects', compact('projects','page'));
        } catch (\Throwable $th) {
            //throw $th;
            Log::error('Error loading projects page: ' . $th->getMessage());
            return redirect()->back()->with('error', 'An error occurred while loading the projects page.');
        }
    }

    public function blogs($categorySlug = null, $blogSlug = null)
    {
        try {
            $blogsQuery = Blog::with('blogCategory', 'user')->where('is_active', 'active');

            if (request()->filled('search')) {
                $search = request('search');
                $blogsQuery->where(function ($query) use ($search) {
                    $query->where('title', 'like', "%{$search}%")
                        ->orWhere('content', 'like', "%{$search}%");
                });
            }

            if (request()->filled('tag')) {
                $tag = request('tag');
                $blogsQuery->where('tags', 'like', '%"'.$tag.'"%');
            }

            $topCategories = BlogCategory::withCount(['blogs' => function ($query) {
                    $query->where('is_active', 'active');
                }])->orderByDesc('blogs_count')->take(5)->get();

            $allTags = Blog::where('is_active', 'active')
                ->pluck('tags')
                ->filter()
                ->map(fn($tag) => json_decode($tag, true))
                ->flatten()
                ->filter()
                ->map(fn($tag) => trim($tag));

            $topTags = $allTags->countBy()->sortDesc()->take(10);

            $page = Page::where('page_name', 'blogs')->first();

            if ($categorySlug && !$blogSlug) {
                $blogCategory = BlogCategory::where('slug', $categorySlug)->firstOrFail();

                $blogs = $blogsQuery
                    ->where('blog_category_id', $blogCategory->id)
                    ->latest()
                    ->paginate(3)
                    ->withQueryString();

                $relatedBlogs = Blog::with('blogCategory', 'user')
                    ->where('blog_category_id', $blogCategory->id)
                    ->where('is_active', 'active')
                    ->latest()
                    ->take(3)
                    ->get();

                return view('frontend.pages.blog.blogs', compact('blogs','topTags','topCategories','relatedBlogs','page'));
            }

            if ($categorySlug && $blogSlug) {
                $blogCategory = BlogCategory::where('slug', $categorySlug)->firstOrFail();

                $blog = Blog::with('user.profile:id,user_id,profile_image','blogComments', 'blogCategory')->withCount('blogComments')->where('slug', $blogSlug)
                    ->where('blog_category_id', $blogCategory->id)
                    ->where('is_active', 'active')
                    ->firstOrFail();

                $nextBlog = Blog::with('blogCategory')
                    ->where('id', '>', $blog->id)
                    ->where('is_active', 'active')
                    ->orderBy('id')
                    ->first();

                if (!$nextBlog) {
                    $nextBlog = Blog::with('blogCategory')->where('is_active', 'active')->first();
                }

                $previousBlog = Blog::with('blogCategory')
                    ->where('id', '<', $blog->id)
                    ->where('is_active', 'active')
                    ->orderBy('id', 'desc')
                    ->first();

                if (!$previousBlog) {
                    $previousBlog = Blog::with('blogCategory')->where('is_active', 'active')->orderBy('id', 'desc')->first();
                }

                $relatedBlogs = Blog::with('blogCategory', 'user')
                    ->where('blog_category_id', $blog->blog_category_id)
                    ->where('id', '!=', $blog->id)
                    ->where('is_active', 'active')
                    ->latest()
                    ->take(3)
                    ->get();

                $randomQuote = Quote::inRandomOrder()->first();

                $blogComments = BlogComment::with('user')->where('blog_id', $blog->id)->where('is_active', 'active')->latest()->get();

                return view('frontend.pages.blog.blog-details', compact('blog','nextBlog','previousBlog','relatedBlogs','topTags','topCategories','randomQuote','blogComments'));
            }

            $blogs = $blogsQuery->latest()->paginate(3)->withQueryString();

            $relatedBlogs = Blog::with('blogCategory', 'user')
                ->where('is_active', 'active')
                ->latest()
                ->take(3)
                ->get();

            return view('frontend.pages.blog.blogs', compact('blogs','topTags','topCategories','relatedBlogs','page'));
        } catch (\Throwable $th) {
            Log::error('Error loading blogs page: ' . $th->getMessage());
            return redirect()->back()->with('error', 'An error occurred while loading the blogs page.');
        }
    }

    public function blogCommentSubmit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'blog_id' => 'required|exists:blogs,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all())->with('error', 'Validation Error!');
        }
        try {
            DB::beginTransaction();

            $user = User::where('email', $request->email)->first();
            if (!$user) {
                $user = new User();
                $user->name = $request->name;
                $user->email = $request->email;
                $user->password = Hash::make('Default@123');


                $username = $this->generateUsername($request->name);

                while (User::where('username', $username)->exists()) {
                    $username = $this->generateUsername($request->name);
                }
                $user->username = $username;
                $user->save();

                $user->syncRoles('user');

                $profile = new Profile();
                $profile->user_id = $user->id;
                $profile->first_name = $request->name;
                $profile->save();
            }

            $blogComment = new BlogComment();
            $blogComment->user_id = $user->id;
            $blogComment->blog_id = $request->blog_id;
            $blogComment->message = $request->message;
            $blogComment->save();

            DB::commit();
            return redirect()->back()->with('success', 'Your comment has been submitted successfully!');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            Log::error('Error submitting comment: ' . $th->getMessage());
            return redirect()->back()->with('error', 'An error occurred while submitting the contact form. Please try again later.');
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

    public function privacyPolicy()
    {
        try {
            $page = Page::where('page_name', 'privacy')->first();
            return view('frontend.pages.privacy-policy', compact('page'));
        } catch (\Throwable $th) {
            //throw $th;
            Log::error('Error loading privacy policy page: ' . $th->getMessage());
            return redirect()->back()->with('error', 'An error occurred while loading the privacy policy page.');
        }
    }

    public function terms()
    {
        try {
            $page = Page::where('page_name', 'terms')->first();
            return view('frontend.pages.terms', compact('page'));
        } catch (\Throwable $th) {
            //throw $th;
            Log::error('Error loading terms page: ' . $th->getMessage());
            return redirect()->back()->with('error', 'An error occurred while loading the terms page.');
        }
    }

    public function generateUsername($name)
    {
        $name = strtolower(str_replace(' ', '', $name));
        $username = $name . rand(1000, 9999);
        return $username;
    }
}

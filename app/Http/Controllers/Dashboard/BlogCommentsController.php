<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\BlogComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BlogCommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $this->authorize('view blog');
        try {
            $blogComments = BlogComment::with('user')->get();
            return view('dashboard.blog-comments.index', compact('blogComments'));
        } catch (\Throwable $th) {
            Log::error('Blog Comment Index Failed', ['error' => $th->getMessage()]);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->authorize('update blog');
        try {
            $blogComment = BlogComment::findOrFail($id);
            $blogComment->delete();
            return redirect()->back()->with('success', 'Blog Comment Deleted Successfully');
        } catch (\Throwable $th) {
            Log::error('Blog Comment Delete Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }

    public function updateStatus(string $id)
    {
        $this->authorize('update blog');
        try {
            $blogComment = BlogComment::findOrFail($id);
            $message = $blogComment->is_active == 'active' ? 'Blog Comment Deactivated Successfully' : 'Blog Comment Activated Successfully';
            if ($blogComment->is_active == 'active') {
                $blogComment->is_active = 'inactive';
                $blogComment->save();
            } else {
                $blogComment->is_active = 'active';
                $blogComment->save();
            }
            return redirect()->back()->with('success', $message);
        } catch (\Throwable $th) {
            Log::error('Blog Comment Status Updation Failed', ['error' => $th->getMessage()]);
            return redirect()->back()->with('error', "Something went wrong! Please try again later");
            throw $th;
        }
    }
}

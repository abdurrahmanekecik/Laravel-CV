<?php

namespace app\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view("admin.blogs.index",compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.blogs.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $blog = new Blog();
        $blog->title =  $request->title;
        $blog->description =  $request->description;
        $blog->url =  $request->url;
        $blog->background_image =  $request->background_image;
        $blog->content =  $request->text_content;
        $blog->save();
        return redirect(route("blogs.index"));
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view("admin.blogs.create",compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $blog->title =  $request->title;
        $blog->description =  $request->description;
        $blog->url =  $request->url;
        $blog->background_image =  $request->background_image;
        $blog->content =  $request->text_content;
        $blog->save();
        return redirect(route("blogs.index"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return  redirect(route("blogs.index"));
    }
}

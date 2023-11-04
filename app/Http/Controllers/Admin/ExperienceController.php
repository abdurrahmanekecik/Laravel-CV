<?php

namespace app\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $educations = Experience::all();
        return view("admin.educations.index",compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.educations.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $education = new Project();
        $education->heading =  $request->heading;
        $education->description =  $request->description;
        $education->summary =  $request->summary;
        $education->slug_url =  $request->slug_url;
        $education->background_image =  $request->background_image;
        $education->author =  $request->author;
        $education->service =  $request->service;
        $education->date =  $request->date;
        $education->detail =  $request->detail;
        $education->image =  $request->image;
        $education->idea_text =  $request->idea_text;
        $education->idea_video =  $request->idea_video;
        $education->result_text =  $request->result_text;
        $education->result_image =  $request->result_image;
        $education->save();
        return redirect(route("educations.index"));
    }

    /**
     * Display the specified resource.
     */
    public function show(Experience $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experience $education)
    {
        return view("admin.educations.create",compact('education'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Experience $education)
    {
        $education->heading =  $request->heading;
        $education->description =  $request->description;
        $education->summary =  $request->summary;
        $education->slug_url =  $request->slug_url;
        $education->background_image =  $request->background_image;
        $education->author =  $request->author;
        $education->service =  $request->service;
        $education->date =  $request->date;
        $education->detail =  $request->detail;
        $education->image =  $request->image;
        $education->idea_text =  $request->idea_text;
        $education->idea_video =  $request->idea_video;
        $education->result_text =  $request->result_text;
        $education->result_image =  $request->result_image;
        $education->save();
        return redirect(route("educations.index"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $education)
    {
        $education->delete();
        return  redirect(route("educations.index"));
    }
}

<?php

namespace app\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view("admin.projects.index",compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view("admin.projects.create");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $project = new Project();
        $project->heading =  $request->heading;
        $project->description =  $request->description;
        $project->summary =  $request->summary;
        $project->slug_url =  $request->slug_url;
        $project->background_image =  $request->background_image;
        $project->author =  $request->author;
        $project->service =  $request->service;
        $project->date =  $request->date;
        $project->detail =  $request->detail;
        $project->image =  $request->image;
        $project->idea_text =  $request->idea_text;
        $project->idea_video =  $request->idea_video;
        $project->result_text =  $request->result_text;
        $project->result_image =  $request->result_image;
        $project->save();
        return redirect(route("projects.index"));
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view("admin.projects.create",compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $project->heading =  $request->heading;
        $project->description =  $request->description;
        $project->summary =  $request->summary;
        $project->slug_url =  $request->slug_url;
        $project->background_image =  $request->background_image;
        $project->author =  $request->author;
        $project->service =  $request->service;
        $project->date =  $request->date;
        $project->detail =  $request->detail;
        $project->image =  $request->image;
        $project->idea_text =  $request->idea_text;
        $project->idea_video =  $request->idea_video;
        $project->result_text =  $request->result_text;
        $project->result_image =  $request->result_image;
        $project->save();
        return redirect(route("projects.index"));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return  redirect(route("projects.index"));
    }
}

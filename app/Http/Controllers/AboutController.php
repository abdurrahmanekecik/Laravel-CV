<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::all();
        return response()->view('admin.pages.abouts.index', compact('about'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        return view('admin.pages.abouts.show', compact('about'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        return view('admin.pages.abouts.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $about->title = $request->title;
        $about->description = $request->description;
        $about->experience = $request->experience;
        $about->title = $request->title1;
        $about->title1exp = $request->title1exp;
        $about->title = $request->title2;
        $about->title2exp = $request->title2exp;
        $about->title = $request->title3;
        $about->title3exp = $request->title3exp;
        $about->save();

        if ($about){
            return redirect()->route("admin.pages.abouts.index");
        }else{
            return redirect()->back()->withInput()->with(["error" => "Error update setting"]);
        }
    }



}

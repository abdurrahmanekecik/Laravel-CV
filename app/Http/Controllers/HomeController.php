<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $homes = Home::all();
        return response()->view('admin.pages.homes.index', compact('homes'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show(Home $home)
    {
        return view('admin.pages.homes.show', compact('home'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home)
    {
        return view('admin.pages.homes.edit', compact('home'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Home $home)
    {
        $home->title = $request->title;
        $home->hugetitle = $request->hugetitle;
        $home->description = $request->description;
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('data'), $filename);

            $home->image = $filename;
        }
        $home->save();

        if ($home){
            return redirect()->route("admin.pages.homes.index");
        }else{
            return redirect()->back()->withInput()->with(["error" => "Error update setting"]);
        }
    }
    }


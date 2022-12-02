<?php

namespace App\Http\Controllers;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {

            $settings = Setting::all();
            return response()->view('admin.settings.index',compact('settings'));

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        return view('admin.settings.show', compact('setting'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        return view('admin.settings.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {

        $setting->name = $request->name;
        $setting->description = $request->description;
        $setting->favicon = $request->favicon;
        $setting->logo = $request->logo;
        $setting->server = $request->server;
        $setting->user = $request->user;
        $setting->pass = $request->pass;
        $setting->port = $request->port;
        $setting->ssltls = $request->ssltls;
        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('data'), $filename);

            $setting->image = $filename;
        }
        $setting->save();

        if ($setting){
            return redirect()->route("admin.settings.index");
        }else{
            return redirect()->back()->withInput()->with(["error" => "Error update setting"]);
        }
    }


}

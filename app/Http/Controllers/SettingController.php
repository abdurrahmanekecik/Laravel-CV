<?php

namespace App\Http\Controllers;
use App\Models\Setting;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;

class SettingController extends Controller
{


    public function settingsGet()
    {

        $data = Setting::all()->first();
        return view('admin.settings.index', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function settingsPost(Request $request, Setting $setting)
    {

        $setting = Setting::findOrFail(1);
        $setting->name = $request->name;
        $setting->description = $request->description;
        $setting->favicon = $request->favicon;
        $setting->logo = $request->logo;
        $setting->server_link = $request->server_link;
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
            return redirect()->route("settingsGet");
        }else{
            return redirect()->back()->withInput()->with(["error" => "Error update setting"]);
        }
    }


}

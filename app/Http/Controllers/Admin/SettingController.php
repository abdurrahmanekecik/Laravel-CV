<?php

namespace app\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setting $setting)
    {

        $setting = Setting::first();

       return view('admin.settings.edit',compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Setting $setting)
    {
        $setting = Setting::first();
        $setting->name = $request->name;
        $setting->description = $request->description;
        $setting->favicon = $request->name;
        $setting->logo = $request->logo;
        $setting->server = $request->server;
        $setting->user = $request->user;
        $setting->pass = $request->pass;
        $setting->ssltls = $request->ssltls;
        $setting->save();

        return redirect(route("settings.edit", compact('setting')));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {
        //
    }
}

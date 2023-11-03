<?php

namespace app\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
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
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        $contact = Contact::first();

        return view('admin.sections.home',compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        $home->name = $request->name;
        $home->description = $request->description;
        $home->favicon = $request->name;
        $home->logo = $request->logo;
        $home->server = $request->server;
        $home->user = $request->user;
        $home->pass = $request->pass;
        $home->ssltls = $request->ssltls;
        $home->save();

        return redirect(route("home.edit", compact('home')));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Education;
use App\Models\Home;
use App\Models\Project;
use App\Models\Setting;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $setting = Setting::first();
        $about = About::first();
        $contact = Contact::first();
        $home = Home::first();
        $blogs = Blog::orderBy('id', 'desc')
            ->take(3)
            ->get();

        $educations = Education::orderBy('id', 'desc')
            ->take(3)
            ->get();

        $projects = Project::orderBy('id', 'desc')
            ->take(3)
            ->get();




        return view("index",compact("setting","about","contact","home","blogs","educations","projects"));
    }
}

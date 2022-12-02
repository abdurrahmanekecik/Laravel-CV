<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class BackController extends Controller
{
    public function admin()

    {
        return view('admin.index');
    }
}

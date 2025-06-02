<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        // return view('website.index');
        return view('admin.dashboard');
    }
}

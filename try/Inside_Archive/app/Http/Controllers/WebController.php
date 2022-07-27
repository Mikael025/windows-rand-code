<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home ()
    {
        return view ('home',['title' => 'Home']);
    }

    public function create ()
    {
        return view('create',['title' => 'Create']);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function home () {
        $title = "home";

        return response()->json(['title' => $title],200);
    } 
}

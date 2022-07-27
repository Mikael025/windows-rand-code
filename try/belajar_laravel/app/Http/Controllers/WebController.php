<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang;

class WebController extends Controller
{
    public function home (){
        $barang = barang::all();
        return view ('home',compact('barang'));
    }

    public function create(){
        return view ('create');
    }
}

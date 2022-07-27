<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang;
use App\jenis;

class WebController extends Controller
{
    public function home (){
        $barang = barang::all();
        return view ('home',compact('barang'));
    }

    public function create(){
        $jenis = jenis::all();
        return view ('create',['jenis' => $jenis]);
    }
}

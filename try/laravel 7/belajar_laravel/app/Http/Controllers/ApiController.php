<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\barang;
use App\jenis;

class ApiController extends Controller
{
    public function home ()
    {
        $title = "home";

        return response()->json(['title'=>$title],200);
    }

    public function all_barang()
    {
        $barang = barang::all();

        return response()->json(['barang'=>$barang],200);
    }

    public function all_jenis(){
        $jenis = jenis::all(); 

        return response()->json(['jenis'=>$jenis],200);
    }


    public function add_barang(request $request)
    {
        $request->validate([
            "nama_barang" => "required|min:3|max:20|string",
            "jumlah_barang" => "required|int",
            "id_jenis" => "required|"
        ]);

        barang::create($request->all());

        return response()->json("barang berhasil ditambahkan",200);
    }

   
}

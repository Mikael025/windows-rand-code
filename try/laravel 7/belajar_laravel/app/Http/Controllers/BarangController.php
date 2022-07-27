<?php

namespace App\Http\Controllers;

use App\barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "nama_barang" => "required|min:3|max:20",
            "jumlah_barang" => "required|int",
            "id_jenis" => "required|"
        ]);

        barang::create($request->all());

        return redirect()->route('home')->with('success','barang berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $barang = barang::find($id);

    //    $barang = barang::where('nama_barang',$nama_barang)->get()

        return view('edit',compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $barang = barang::find($id);

        $request->validate([
            "nama_barang" => "required|min:3|max:20",
            "jumlah_barang" => "required|integer"
        ]);

        $barang->update($request->all());
        
        return redirect()->route('home')->with('success','Barang berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        barang::destroy($id);

        return redirect()->route('home')->with('success','Barang berhasil dihapus');
    }
}

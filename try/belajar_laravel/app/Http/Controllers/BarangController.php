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
            "nama_barang" => 'required|min:5|string',
            "jumlah_barang" => 'required|numeric'
        ]);
        
        barang::create($request->all());

        return redirect()->route('home')->with('success','produk sudah ditambahkan');

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
        $barang=barang::find($id);

        $request->validate([
            "nama_barang" => 'required|min:5|string',
            "jumlah_barang" => 'required|numeric'
        ]);

        $barang->update($request->all());
        return redirect()->route('home')->with('success','Barang sudah diupdate');
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

        return redirect()->route('home')->with('success','Barang telah dihapus');
    }
}

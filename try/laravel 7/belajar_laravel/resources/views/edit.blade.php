@extends('lyt.layout')

@section('content')
    <h1> Edit Barang {{ $barang->nama_barang }}</h1>

    <form action="{{ url('update/'.$barang->id) }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nama_barang" class="form-label">Nama Barang</label>
        <input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="{{$barang->nama_barang }}">
    </div>
    <div class="mb-3">
        <label for="jumlah_barang" class="form-label">Jumlah Barang</label>
        <input type="numeric" class="form-control" name="jumlah_barang" id="jumlah_barang" placeholder="{{ $barang->jumlah_barang }}">
      </div>

    <button class="btn btn-primary" type="submit"> Submit</button>
    

@endsection
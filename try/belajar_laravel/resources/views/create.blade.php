@extends('lyt.layout')

@section('content')

<h1> Create page </h1>
    

<form action="/store" method="post">
    @csrf
    <div class="mb-3">
        <label for="nama_barang" class="form-label">Nama barang</label>
        <input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="">
      </div>
      <div class="mb-3">
        <label for="jumlah_barang" class="form-label">Jumlah barang</label>
        <input type="text" class="form-control" name="jumlah_barang" id="jumlah_barang" placeholder="">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>

@endsection
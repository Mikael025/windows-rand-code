@extends('lyt.layout')

@section('content')
    <h1> Halaman Create Barang </h1>

    <form action="{{ url('/store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nama_barang" class="form-label">Nama Barang</label>
        <input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="contoh nama barang">
    </div>
    <div class="mb-3">
        <label for="jumlah_barang" class="form-label">Jumlah Barang</label>
        <input type="numeric" class="form-control" name="jumlah_barang" id="jumlah_barang" placeholder="contoh jumlah barang">
      </div>

    <div class="mb-3">
      <label for="id_jenis" class="form-label">jenis Barang</label>
      <select name="id_jenis" class="form-select" >
        @foreach($jenis as $j)
        {
            <option value="{{ $j->id }}">{{ $j->nama_jenis }}</option>
        }
        @endforeach
      </select>
    </div>
    
    <button class="btn btn-primary" type="submit"> Submit</button>
    
    </form>
    
@endsection
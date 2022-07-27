
@extends('lyt.layout')

@section('content')
    <h1 style="text-align: center"> Halaman Create Barang </h1>

    <div style="text-align: left">
    <form action="{{ url('/store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="judul_buku" class="form-label" >Judul Buku</label>
        <input type="text" class="form-control" name="judul_buku" id="judul_buku" placeholder="Judul buku" autocomplete="off">
    </div>
    <div class="mb-3">
        <label for="penerbit" class="form-label">Penerbit</label>
        <input type="numeric" class="form-control" name="penerbit" id="penerbit" placeholder="Penerbit......." autocomplete="off">
    </div>
    <div class="mb-3">
        <label for="tahun_terbit" class="form-label">Tahun terbit</label>
        <input type="numeric" class="form-control" name="tahun_terbit" id="tahun_terbit" placeholder="XXXX" autocomplete="off">
    </div>
      
    <div class="mb-3">
        <label for="sinopsis_buku" class="form-label">Example textarea</label>
        <textarea class="form-control" nama="sinopsis_buku" id="sinopsis_buku" rows="3"></textarea>
    </div>
    {{-- <div class="mb-3">
      <label for="id_jenis" class="form-label">jenis Barang</label>
      <select name="id_jenis" class="form-select" >
        @foreach($jenis as $j)
        {
            <option value="{{ $j->id }}">{{ $j->nama_jenis }}</option>
        }
        @endforeach
      </select>
    </div> --}}
    
    <button class="btn btn-primary" type="submit"> Submit</button>
    
    </form>
    </div>
    
@endsection
@extends('lyt.layout')

@section('content')
<div class="container">
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
    </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">NO</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Jumlah Barang</th>
            <th scope="col">jenis Barang</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            @foreach ($barang as $barang)
                <tr>
                    <td><?= $i++;?></td>
                    <td> {{ $barang->nama_barang }} </td>
                    <td> {{ $barang->jumlah_barang }} </td>
                    <td> {{ $barang->jenis["nama_jenis"] }} </td>
                    <td>
                        <a href="{{ url("/edit/".$barang->id) }}" class="btn btn primary">Edit</a>
                        <a href="{{ url("/delete/".$barang->id) }}" class="btn btn danger">Delete</a>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection

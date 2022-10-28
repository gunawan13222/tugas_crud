@extends('layout.master')
@section('konten')
<br>
<div class="d-flex justify-content-center">
  <div class="container">
    <div class="card">
      <ul class="list-group">
        <li class="list-group-item active"> {{ $produk->nama }}</li>
        <li class="list-group-item"> spesisikasi : {{ $produk->deskripsi }}</li>
        <li class="list-group-item"> harga :{{ $produk->harga }}</li>
        <li class="list-group-item"> stok : {{ $produk->stok }}</li>
        <li class="list-group-item">{{ $produk->kategori->nama }}</li>
        <li class="list-group-item">{{ $produk->kategori->keterangan }}</li>
      </ul>
    </div>
    <br>
    <a href="{{ route('produk.index') }}" type="submit"><button  type="button" class="btn btn-warning">kembali</button></a>
</div>
</div>
@endsection








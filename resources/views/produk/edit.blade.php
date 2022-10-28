@extends('layout.master')
@section('konten')
@include('layout.pesan')
<br>
<div class="d-flex justify-content-center">
  <div class="col-md-4 col-md-offset-6">
    <form action="{{ route('produk.update', $produk->id) }}" method='post'>
  @csrf
  @method('put')
<form >
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" value="{{ $produk->nama }}" >
  </div>
<form>
  <div class="form-group">
    <label for="deskripsi">Deskripsi</label>
    <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{ $produk->deskripsi }}">
  </div>
<form>
  <div class="form-group">
    <label for="harga">Harga</label>
    <input type="text" class="form-control" id="harga"  name="harga" value="{{ $produk->harga }}" >
  </div>
<form>
  <div class="form-group">
    <label for="stok">Stok</label>
    <input type="text" class="form-control" id="stok" name="stok"  value="{{ $produk->stok }}">
  </div>
 <br>
  <label for="kategori">kategori</label>
  <select class="form-select" aria-label="Default select example" name="kategori_id" id="kategori_id">
  @foreach ($kate as $item)
  <option value="{{ $item->id }}">{{ $item->nama}}</option>
  @endforeach
</select>
<br>
<a href="{{ route('produk.index') }}" type="submit"><button class="btn btn-warning">kembali</button></a>
<button  class="btn btn-primary" type="submit" >update</button>
  </div>
</div>
@error('nama','deskripsi','harga','stok','kategori')
<strong>{{ $message }}</strong>
@enderror
@endsection

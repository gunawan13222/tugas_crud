@extends('layout.master')
@section('konten')
@include('layout.pesan')
<br>
<div class="d-flex justify-content-center">
  <div class="col-md-4 col-md-offset-6">
  <form action="{{ route('produk.store') }}" method='post'>
  @csrf
<form >
  <div></div>
  <div class="form-group">
    <label for="nama">Nama Produk</label>
    <input type="text" class="form-control" id="nama" name="nama" >
  </div>
  <div class="form-group">
    <label for="deskripsi">Deskripsi</label>
    <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi"></textarea>
  </div>
  <div class="form-group">
    <label for="harga">Harga</label>
    <input type="text" class="form-control" id="harga"  name="harga" >
  </div>
  <div class="form-group">
    <label for="stok">Stok</label>
    <input type="text" class="form-control" id="stok" name="stok" >
  </div>
  <label for="kategori">kategori</label>
  <select class="form-select" aria-label="Default select example" name="kategori_id" id="kategori_id">
  @foreach ($kate as $item)
  <option value="{{ $item->id }}">{{ $item->nama}}</option>
  @endforeach
</select>
  @error('nama','deskripsi','harga','stok','kategori')
<strong>{{ $message }}</strong>
@enderror
<br>
<a href="{{ route('produk.index') }}" type="submit"><button class="btn btn-warning">kembali</button></a>
<button class="btn btn-primary" type="submit">Save</button>
</form>
</div>
</div>




@endsection 



{{-- nama  <input type="text" name="nama"><br>
deskripsi  <input type="text" name="deskripsi"><br>
harga <input type="text" name="harga"><br>
stok  <input type="text" name="stok"><br> --}}



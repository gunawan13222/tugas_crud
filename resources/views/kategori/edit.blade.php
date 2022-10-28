@extends('layout.master')
@section('konten')
@include('layout.pesan')
<br>
<div class="d-flex justify-content-center">
  <div class="col-md-4 col-md-offset-6">
    <form action="{{ route('kategori.update', $kategori->id) }}" method='post'>
  @csrf
  @method('put')
<form >
  <div class="form-group">
    <label for="nama">Nama kategori</label>
    <input type="text" class="form-control" id="nama" name="nama" value="{{ $kategori->nama }}" >
  </div>
<form>
  <div class="form-group">
    <label for="keterangan">keterangan</label>
    <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{ $kategori->keterangan }}">
  </div>
  <br>
      <a href="{{ route('kategori.index') }}" type="submit"><button class="btn btn-warning">kembali</button></a>
  <button  class="btn btn-primary" type="submit" >update</button>
  </div>
</div>
@error('nama','keterangan')
<strong>{{ $message }}</strong>
@enderror
</form>
@endsection

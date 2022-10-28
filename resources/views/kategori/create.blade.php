@extends('layout.master')
@section('konten')
@include('layout.pesan')
<br>
<div class="d-flex justify-content-center">
  <div class="col-md-4 col-md-offset-6">
  <form action="{{ route('kategori.store') }}" method='post'>
  @csrf
<form >
  <div class="form-group">
    <label for="nama">Nama kategori</label>
    <input type="text" class="form-control" id="nama" name="nama" >
  </div>
<form>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">keterangan</label>
    <textarea class="form-control" id="keterangan" rows="3"  name="keterangan"></textarea>
  </div>
  @error('nama','deskripsi')
<strong>{{ $message }}</strong>
@enderror
<br>
<a href="{{ route('kategori.index') }}" type="submit"><button class="btn btn-warning">kembali</button></a>
<button class="btn btn-primary" type="submit">Save</button>
</form>
</div>
</div>   
@endsection 





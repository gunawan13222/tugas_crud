@extends('layout.master')
@section('konten')
<br>
<div class="d-flex justify-content-center">
  <div class="container">
    <div class="card">
      <ul class="list-group">
        <li class="list-group-item active">detail kategori</li>
        <li class="list-group-item "> {{ $kategori->nama }}</li>
        <li class="list-group-item "> {{ $kategori->keterangan }}</li>
      </ul>
    </div>
    <br>
    <a href="{{ route('kategori.index') }}" type="submit"><button  type="button" class="btn btn-warning">kembali</button></a>
  </div>
</div>
@endsection






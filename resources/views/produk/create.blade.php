@extends('layout.master')
@section('konten')
@include('layout.pesan')
<h1>tambah produk</h1>
<form action="{{ route('produk.store') }}" method='post'>
@csrf
judul  <input type="text" name="judul">
@error('judul')
<strong>{{ $message }}</strong>
@enderror
<button type="submit">Save</button>
</form>
    <a href="{{ route('produk.index') }}" type="submit">kembali</a>
@endsection
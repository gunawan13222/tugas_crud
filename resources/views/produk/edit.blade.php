@extends('layout.master')
@section('konten')
@include('layout.pesan')
<h1>edit produk</h1>
<form action="{{ route('produk.update', $produk->id) }}" method="post">
@csrf
@method('put')
judul : <input type="text" name="judul" value="{{ $produk->judul }}">
@error('judul')
<strong>{{ $message }}</strong>
@enderror
<button  class="btn btn-primary" type="submit" >update</button>
</form>
<a href="{{ route('produk.index') }}" type="submit">kembali</a>
@endsection
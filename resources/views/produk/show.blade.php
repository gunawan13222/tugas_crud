@extends('layout.master')
@section('konten')
<h1>Detail produk</h1>
<p> judul : {{ $produk->judul }}</p>
<a href="{{ route('produk.index') }}" type="submit">kembali</a>
    
@endsection
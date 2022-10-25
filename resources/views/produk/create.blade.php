@extends('layout.master')
@section('konten')
@include('layout.pesan')
<form action="{{ route('produk.store') }}" method='post'>
@csrf
judul  <input type="text" name="judul">
@error('judul')
<strong>{{ $message }}</strong>
@enderror
<button class="btn btn-primary" type="submit">Save</button>
</form>
    <a href="{{ route('produk.index') }}" type="submit">kembali</a>
@endsection
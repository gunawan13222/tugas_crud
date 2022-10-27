@extends('layout.master')
@section('konten')
<a href="{{ route('produk.index') }}" type="submit"><button  type="button" class="btn btn-warning">kembali</button></a>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">nama</th>
      <th scope="col">deskripsi</th>
      <th scope="col">harga</th>
      <th scope="col">stok</th>
      <th scope="col">kategori</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td> {{ $produk->nama }}</td>
      <td>{{ $produk->deskripsi }}</td>
      <td>{{ $produk->harga }}</td>
      <td> {{ $produk->stok }}</td>
      <td> {{ $produk->nama_kategori }}</td>
    </tr>
  </tbody>
</table>
@endsection








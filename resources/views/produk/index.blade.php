@extends('layout.master')
@section('konten')
@include('layout.pesan')
<br>
<div class="container"><div class="card">
  <table  class="table table-bordered">
  <thead>
    <tr>
      <th style="width: 5%" >no</th>
      <th>Nama produk</th>
      <th>deskripsi</th>
      <th>harga</th>
      <th>stok</th>
      <th>kategori</th>
      <th><a href="{{ route('produk.create') }}"><button type="button" class="btn btn-success" >tambah data</button></a></th>
    </tr>
  </thead>
  <tbody>
    @php $no = 1 ; @endphp
    @foreach ($produk as $data)
    <tr>
      <td>{{ $no++ }}</td>
      <td>{{ $data->nama }}</a></td>
      <td>{{ $data->deskripsi }}</td>
      <td>{{ $data->harga }}</td>
      <td>{{ $data->stok }}</td>
      <td>{{ $data->kategori->nama}}</td>
      <td>
        <form action="{{ route('produk.destroy', $data->id )}}" method='post'>
         @csrf
        @method('delete')
        <a href="{{ route('produk.show', $data->id) }}"><button type="button" class="btn btn-primary">detail</button></a>
        <a href="{{ route('produk.edit', $data->id) }}"><button type="button" class="btn btn-warning">edit</button></a>
        <button class="btn btn-danger btn-sm"  type="submit" onclick="return comfirm('apakah anda yakin ?')">Delete</button>
      </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
@endsection

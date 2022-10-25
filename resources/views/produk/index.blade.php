@extends('layout.master')
@section('konten')
@include('layout.pesan')
<table border="1" class="table table-striped">
  <thead>
    <tr>
      <th style="width: 5%" >no</th>
      <th>produk</th>
      <th><a href="{{ route('produk.create') }}">Tambah data</a></th>
    </tr>
  </thead>
  <tbody>
    @php $no = 1 ; @endphp
    @foreach ($produk as $data)
    <tr>
      <td>{{ $no++ }}</td>
      <td><a href="{{ route('produk.show', $data->id ) }}">{{ $data->judul }}</a></td>
      <td>
        <form action="{{ route('produk.destroy', $data->id )}}" method='post'>
         @csrf
        @method('delete')
        <a href="{{ route('produk.edit', $data->id) }}">edit</a>
        <button class="btn btn-danger btn-sm"  type="submit" onclick="return comfirm('apakah anda yakin ?')">Delete</button>
      </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
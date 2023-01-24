@extends('layouts.marketingNav')
@section('container')
<h1>On Progress Prospek</h1>
<a href="/marketing"><button type="button" class="btn btn-outline-primary">< Kembali</button></a>
<a href="/marketing/inputProspek"><button type="button" class="btn btn-outline-primary">+ Tambah Prospek</button></a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Prospek</th>
            <th scope="col">Perusahaan</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        @foreach ($prospek as $item)         
        <tbody class="table-group-divider">
          <tr>
            <td>{{ $item["prospek"] }}</td>
            <td>{{ $item["perusahaan"] }}</td>
            <td>{{ $item["tanggal"] }}</td>
            <td><button type="button" class="btn btn-outline-warning">Edit</button> | <button type="button" class="btn btn-outline-danger">Hapus</button></td>
          </tr>
        </tbody>
        @endforeach
      </table>
@endsection
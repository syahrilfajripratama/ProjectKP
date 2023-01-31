@extends('layouts.marketingNav')
@section('container')
<h1>On Progress Prospek</h1>
<div class="container">
  <div class="row">
    <div class="col col-lg-10"><a href="/marketing"><button type="button" class="btn btn-outline-primary"><i class="bi bi-backspace"> Kembali</i></button></a></div>
    <div class="col"><a href="/marketing/inputProspek"><button type="button" class="btn btn-outline-primary"><i class="bi bi-plus-circle"> Tambah Prospek</i></button></a></div>
  </div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Prospek</th>
            <th scope="col">Perusahaan</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        @foreach ($prospek as $item)         
        <tbody class="table-group-divider">
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->jenisProspek->prospek }}</td>
            <td>{{ $item->perusahaan }}</td>
            <td>{{ $item->tanggal }}</td>
            <td><button type="button" class="btn btn-outline-warning"><i class="bi bi-pen">Edit</i></button> | <button type="button" class="btn btn-outline-danger"><i class="bi bi-trash3">Hapus</i></button></td>
          </tr>
        </tbody>
        @endforeach
      </table>
@endsection
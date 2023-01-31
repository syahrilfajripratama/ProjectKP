@extends('layouts.bmNav')

@section('container')
<a href="/branchManager"><button type="button" class="btn btn-outline-primary"><i class="bi bi-backspace"> Kembali</i></button></a>
<h1>Validated Prospek</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Prospek</th>
            <th scope="col">Perusahaan</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Marketers</th>
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
            <td>{{ $item->marketer->name }}</td>
            <td><button type="button" class="btn btn-outline-primary"><i class="bi bi-file-earmark-fill"> Details</i></button></td>
          </tr>
        </tbody>
        @endforeach
      </table>
@endsection
@extends('layouts.marketingNav')

@section('container')
<a href="/marketing"><button type="button" class="btn btn-outline-primary">< Kembali</button></a>
<h1>Validated Prospek</h1>
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
            <td><button type="button" class="btn btn-outline-primary">Details</button></td>
          </tr>
        </tbody>
        @endforeach
      </table>
@endsection
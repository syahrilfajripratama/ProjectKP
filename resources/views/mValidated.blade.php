@extends('layouts.marketingNav')

@section('container')
    <h1>Validated Prospek</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Prospek</th>
            <th scope="col">Perusahaan</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>@foreach ($dataProspek as $data)
        <tbody class="table-group-divider">
          <tr>
            <td>{{ $data["prospek"] }}</td>
            <td>{{ $data["perusahaan"] }}</td>
            <td>{{ $data["tanggal"] }}</td>
            <td><button type="button" class="btn btn-outline-primary">Details</button></td>
          </tr>
        </tbody>
        @endforeach
      </table>
@endsection
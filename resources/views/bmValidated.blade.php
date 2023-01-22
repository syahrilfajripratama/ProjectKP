@extends('layouts.BMNav')

@section('container')
    <h1>Validated Prospek</h1>
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
        <tbody class="table-group-divider">
          <tr>
            <th scope="row">1</th>
            <td>Asuransi Properti</td>
            <td>BANK BNI 46</td>
            <td>23 Desember 2022</td>
            <td><button type="button" class="btn btn-outline-primary">Details</button></td>
          </tr>
        </tbody>
        <tbody class="table-group-divider">
          <tr>
            <th scope="row">2</th>
            <td>Asuransi Kebakaran</td>
            <td>PT Bulog</td>
            <td>23 Januari 2023</td>
            <td><button type="button" class="btn btn-outline-primary">Details</button></td>
          </tr>
        </tbody>
      </table>
@endsection
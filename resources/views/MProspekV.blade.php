@extends('layouts.marketingNav')
@section('container')
<div class="container">
    <div class="row">
      <div class="col-9"><h1>Details Prospek</h1>
        <a href="/marketing/validated"><button type="button" class="btn btn-outline-primary"><i class="bi bi-arrow-left"></i> Prospek</i></button></a>
      </div>
      <div class="col-6 mt-4">
        <div class="row">
            <div class="col-4">Marketing</div>
            <div class="col">: {{ $Prospek->marketer->name }}</div>
        </div>
        <div class="row">
            <div class="col-4">Tujuan Perusahaan</div>
            <div class="col">: {{ $Prospek->perusahaan }}</div>
        </div>
        <div class="row">
            <div class="col-4">Client</div>
            <div class="col">: {{ $Prospek->client }}</div>
        </div>
        <div class="row">
            <div class="col-4">Tanggal & Waktu</div>
            <div class="col">: {{ $Prospek->tanggal }}, Pukul : {{ $Prospek->waktu }}</div>
        </div>
        <div class="row">
            <div class="col-4">Jenis Prospek</div>
            <div class="col">: {{ $Prospek->jenisProspek->prospek }}</div>
        </div>
        <div class="row">
            <div class="col-4">Status</div>
            <div class="col">: Tervalidasi</div>
        </div>
        <div class="row">
            <div class="col-4">Rincian Kunjungan</div>
            <div class="col">: {{ $Prospek->keterangan }}</div>
        </div>
      </div>
      <div class="col-3 mt-4">
        <table class="table">
            <thead>
                <tr>
                  <th scope="col">Note</th>
                </tr>
              </thead>
              @foreach ($note as $item)
              <tbody class="table-group-divider">
                <tr>
                    <td>{{ $item->note }}</td>
                </tr>
              </tbody>
              @endforeach
        </table>
      </div>
    </div>
</div>
@endsection
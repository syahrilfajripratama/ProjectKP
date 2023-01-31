@extends('layouts.marketingNav')

@section('container')
<h1>Masukkan Prospek yang akan anda tuju.</h1>
@if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
<a href="/marketing/on-progress"><button type="button" class="btn btn-outline-primary"><i class="bi bi-backspace"> Kembali</i></button></a>
<form action="/marketing/inputProspek" method="post">
  @csrf
    <div class="form-floating mt-3 mb-3">
        <input type="text" class="form-control" name="perusahaan" id="perusahaan" placeholder="Masukkan Nama Perusahaan..." autofocus>
        <label for="perusahaan">Perusahaan</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" name="client" id="client" placeholder="Enter your Clients">
        <label for="client">Clients</label>
      </div>
      <div class="form-floating mb-3">
        <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Masukkan Tanggal">
        <label for="tanggal">Tanggal</label>
      </div>
      <div class="form-floating mb-3">
        <input type="time" class="form-control" name="waktu" id="waktu" placeholder="Time">
        <label for="waktu">Waktu</label>
      </div>
      <div class="form-floating mb-3">
        <select class="form-select" name="jenisProspek_id" id="jenisProspek_id" aria-label="Pilih Prospek Asuransi Anda">
            @foreach ($prospek as $item)
            <option value="1">{{ $item->prospek }}</option>
            @endforeach
          </select>
          <label for="floatingSelect">Jenis Prospek</label>
      </div>
      <div class="form-floating mb-3">
        <textarea class="form-control" name="keterangan" placeholder="Leave a note here" id="keterangan" style="height: 100px"></textarea>
        <label for="keterangan">Rincian Kegiatan</label>
      </div>
      
      <div class="d-grid gap-2">
        <button class="btn btn-primary" type="submit">Submit</button>
      </div>
</form>
@endsection
@extends('layouts.marketingNav')

@section('container')
<h1>Masukkan Prospek yang akan anda tuju.</h1>
<a href="/marketing/on-progress"><button type="button" class="btn btn-outline-primary">< Kembali</button></a>
    <div class="form-floating mt-3 mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="PT. Asuransi Bintang, Tbk.">
        <label for="floatingInput">Perusahaan</label>
      </div>
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingClients" placeholder="Enter your Clients">
        <label for="floatingClients">Clients</label>
      </div>
      <div class="form-floating mb-3">
        <input type="date" class="form-control" id="floatingDate" placeholder="Masukkan Tanggal">
        <label for="floatingDate">Tanggal</label>
      </div>
      <div class="form-floating mb-3">
        <input type="time" class="form-control" id="floatingTime" placeholder="Time">
        <label for="floatingTime">Waktu</label>
      </div>
      <div class="form-floating mb-3">
        <select class="form-select" id="floatingProspek" aria-label="Pilih Prospek Asuransi Anda">
            <option selected>Pilih Jenis Prospek</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
          <label for="floatingSelect">Jenis Prospek</label>
      </div>
      <div class="form-floating mb-3">
        <textarea class="form-control" placeholder="Leave a note here" id="floatingNote" style="height: 100px"></textarea>
        <label for="floatingNote">Rincian Kegiatan</label>
      </div>
      
      <div class="d-grid gap-2">
        <button class="btn btn-primary" type="button">Submit</button>
      </div>
@endsection
@extends('layouts.marketingNav')

@section('container')
<h1>Update Prospek Prospek.</h1>
@foreach($data as $item)
<form action="{{route('updateprospek')}}" method="post">
  @csrf
  <input type="hidden" name="id" value="{{ $item->id }}">
    <div class="form-floating mt-3 mb-3">
        <input value="{{ $item->perusahaan }}" type="text" class="form-control" name="perusahaan" id="perusahaan" placeholder="Masukkan Nama Perusahaan..." autofocus>
        <label for="perusahaan">Perusahaan</label>
      </div>
      <div class="form-floating mb-3">
        <input value="{{ $item->client }}" type="text" class="form-control" name="client" id="client" placeholder="Enter your Clients">
        <label for="client">Clients</label>
      </div>
      <div class="form-floating mb-3">
        <input value="{{ $item->tanggal }}" type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Masukkan Tanggal">
        <label for="tanggal">Tanggal</label>
      </div>
      <div class="form-floating mb-3">
        <input value="{{ $item->waktu }}" type="time" class="form-control" name="waktu" id="waktu" placeholder="Time">
        <label for="waktu">Waktu</label>
      </div>
      <div class="form-floating mb-3">
        <select value="{{ $item->jenisProspek_id }}" class="form-select" name="jenisProspek_id" id="jenisProspek_id" aria-label="Pilih Prospek Asuransi Anda">
            @foreach ($prospek as $item)
            <option value="{{ $item->id }}">{{ $item->prospek }}</option>
            @endforeach
          </select>
          <label for="floatingSelect">Jenis Prospek</label>
      </div>
      <div class="form-floating mb-3">
        <textarea value="{{ $item->keterangan }}" class="form-control" name="keterangan" placeholder="Leave a note here" id="keterangan" style="height: 100px"></textarea>
        <label for="keterangan">Rincian Kegiatan</label>
      </div>
      <div class="d-grid gap-2">
        <button class="btn btn-primary" type="submit">Update Prospek</button>
      </div>
</form>
@endforeach
@endsection
@extends('layouts.marketingnav')

@section('container')
<table class="table">
        <tr>
          Gambar
        </tr>
        <tr>
          {{ $profile->name }}
        </tr>
        <tr>
          {{ $profile->nip }}
        </tr>
        <tr>
          {{ $profile->email }}
        </tr>
  </table>
@endsection
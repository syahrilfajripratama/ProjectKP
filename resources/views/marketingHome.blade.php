@extends('layouts.marketingNav')

@section('container')
<h4>Selamat Datang <b>{{Auth::user()->name}}</b>, Anda Login sebagai <b>Marketing</b>.</h4>
@endsection
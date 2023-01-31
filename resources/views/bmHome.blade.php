@extends('layouts.BMNav')

@section('container')
<h4>Selamat Datang <b>{{Auth::user()->name}}</b>, Anda Login sebagai <b>Branch Manager</b>.</h4>
@endsection
@extends('layouts.admin-app')

@section('title')
	Lihat Data Struktur Organisasi
@stop

@section('content')
<div class="row">
	<div class="col-md-3">
	<li><h4>{{ $struktur->foto }}</h4></li>
	<img src="/image/strukturorganisasi/{{ $struktur->foto }}" class="img-responsive img-thumbnail">
	<br>
	<br>
	<a href="{{ route('struktur') }}" class="btn btn-primary">Kembali</a>
</div>
@stop	
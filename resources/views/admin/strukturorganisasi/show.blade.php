@extends('layouts.admin-app')

@section('title')
	Lihat Data Struktur Organisasi
@stop

@section('content')
<div class="row">
	<div class="col-md-3">
		<h4>{{ $struktur->foto }}</h4>
		<img src="/image/strukturorganisasi/{{ $struktur->foto }}" class="img-responsive img-thumbnail">
		<br>
		<br>
		<a href="{{ route('struktur') }}" class="btn btn-warning">Kembali</a>
	</div>
@stop	
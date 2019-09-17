@extends('layouts.admin-app')

@section('title')
Halaman Fasilitas
@stop

@section('content')
	<a href="{{ route('fasilitas.manage') }}" class="btn btn-sm btn-success">Kelola Data</a>
	<br><br>
	
	<div class="row">
		@foreach( $categories as $category )
		<div class="col-sm-2">
			<a href="" class="btn btn-sm btn-default">{{ $category->nama }}</a>
		</div>
		@endforeach
	</div>
	<br><br>

	<div class="row">
		@foreach( $fasilitations as $fasilitas )
		<div class="col-sm-4">
			<img width="300" src="{{ asset('/image/fasilitas/'.$fasilitas->foto) }}" alt="fasilitas.jpg"> 
			<br><br>
		</div>
		@endforeach
	</div>
	
@stop
@extends('layouts.admin-app')

@section('title')
Halaman Galeri
@stop

@section('content')
	<a href="{{ route('galeri.manage') }}" class="btn btn-sm btn-success">Kelola Data</a>
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
		@foreach( $galeries as $galeri )
		<div class="col-md-4">
			<img width="300" src="{{ asset('/image/galeri/'.$galeri->foto) }}" alt="galeri.jpg"> 
			<br><br>
		</div>
		@endforeach
	</div>
	
@stop
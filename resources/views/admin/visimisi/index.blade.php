@extends('layouts.admin-app')

@section('title')
Visi Dan Misi
@stop

@section('page-name')
Visi dan Misi
@stop

@section('content')
<div class="row">
	<div class="col-md-offset-3">
		<div class="card col-md-7">
			<h4 align="center">Visi :</h4>
			@foreach($visimisi as $vs)
			<div class="row">
				<div class="col-lg-11"><td>{{ $vs->visi }}</td></div>
			</div>
			<br>
			@endforeach
			<h4 align="center">Misi :</h4>
			@foreach($visimisi as $vs)
			<tr>
				<div class="row">
					<div class="col-sm-1">&#9900;</div>
					<div class="col-lg-11"><td>{{ $vs->misi }}</td></div>
				</div>
			</tr>
			@endforeach
		</div>
		<div class="col-md-5">
			<a href="/visimisi/manage" class="btn btn-success">Kelola data</a>
			<a href="{{ route('visimisi.tambah') }}" class="btn btn-info">Tambah Data</a>
		</div>
	</div>
</div>
@stop
@extends('layouts.admin-app')

@section('title')
Tambah Prestasi
@stop

@section('content')
	<h1 class="text-center">Edit Prestasi</h1>

	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<form action="/prestasi/post/{{ $prestasi->id }}" method="POST">
				@csrf

				<div class="form-group">
					<label for="np">Nama Prestasi :</label>
					<input type="text" name="nama" class="form-control" id="np" value="{{ $prestasi->nama }}">
				</div>

				<div class="form-group">
					<label for="jk">Juara Ke- :</label>
					<input type="text" name="juara_ke" class="form-control" id="jk" value="{{ $prestasi->juara_ke }}">
				</div>

				<div class="form-group">
					<label for="tkt">Tingkat :</label>
					<input type="text" name="tingkat" class="form-control" id="tkt" value="{{ $prestasi->tingkat }}">
				</div>

				<div class="form-group">
					<label for="pst">Peserta :</label>
					<input type="text" name="peserta" class="form-control" id="pst" value="{{ $prestasi->peserta }}">
				</div>

				<div class="form-group">
					<button class="btn btn-primary form-control" type="submit">Submit</button>
				</div>
			</form>
		</div>
	</div>
@stop

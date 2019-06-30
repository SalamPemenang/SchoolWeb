@extends('layouts.admin-app')

@section('title')
Tambah Prestasi
@stop

@section('content')
	<h1 class="text-center">Tambah Prestasi</h1>

	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<form action="{{ route('add.post') }}" method="POST">
				@csrf

				<div class="form-group">
					<label for="np">Nama Prestasi :</label>
					<input type="text" name="nama" class="form-control" id="np" required="" maxlength="50">
				</div>

				<div class="form-group">
					<label for="jk">Juara Ke- :</label>
					<input type="text" name="juara_ke" class="form-control" id="jk" required="" maxlength="30">
				</div>

				<div class="form-group">
					<label for="tkt">Tingkat :</label>
					<input type="text" name="tingkat" class="form-control" id="tkt" required="" maxlength="30">
				</div>

				<div class="form-group">
					<label for="pst">Peserta :</label>
					<input type="text" name="peserta" class="form-control" id="pst" required="" maxlength="10">
				</div>

				<div class="form-group">
					<button class="btn btn-primary form-control" type="submit">Submit</button>
				</div>
			</form>
		</div>
	</div>
@stop

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
				<input type="text" name="nama" class="form-control" id="np" maxlength="50">
				@error('nama')
				<span class="invalid-feedback text-danger">
					<strong>{{ $message }}</strong>
				</span>
				@enderror
			</div>

			<div class="form-group">
				<label for="jk">Juara Ke- :</label>
				<input type="text" name="juara_ke" class="form-control" id="jk" maxlength="30">
				@error('juara_ke')
				<span class="invalid-feedback text-danger">
				 <strong>{{ $message }}</strong>
			 </span>
				@enderror
			</div>

			<div class="form-group">
				<label for="tkt">Tingkat :</label>
				<input type="text" name="tingkat" class="form-control" id="tkt" maxlength="30">
				@error('tingkat')
				<span class="invalid-feedback text-danger">
					 <strong>{{ $message }}</strong>
				 </span>
				@enderror
			</div>

			<div class="form-group">
				<label for="pst">Peserta :</label>
				<input type="text" name="peserta" class="form-control" id="pst" maxlength="10">
				@error('peserta')
				<span class="invalid-feedback text-danger">
					 <strong>{{ $message }}</strong>
				 </span>
				@enderror
			</div>

			<div class="form-group">
				<button class="btn btn-primary form-control" type="submit">Submit</button>
			</div>
		</form>
	</div>
</div>
@stop

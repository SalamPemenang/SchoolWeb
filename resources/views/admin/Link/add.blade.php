@extends('layouts.admin-app')

@section('title')
Halaman Link
@stop

@section('content')

	<br><br>
	
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<h4>Masukan Data Link Dibawah Sini...</h4>
			<form action="{{ route('link.store') }}" method="POST" enctype="multipart/form-data">
				@csrf

				<div class="form-group">
					<input type="text" name="nama" class="form-control" maxlength="50" value="{{ old('nama') }}" placeholder="Masukan Nama Website Disini">
					@error('nama')
						<span class="invalid-feedback text-danger">{{ $message }}</span>
					@enderror
				</div>

				<div class="form-group">
					<input type="text" name="link" class="form-control" maxlength="190" value="{{ old('link') }}" placeholder="Masukan Link Disini">
					@error('link')
						<span class="invalid-feedback text-danger">{{ $message }}</span>
					@enderror
				</div>

				<div class="form-group">
					<span>Silahkan Pilih Gambar</span>
					<input type="file" name="foto" class="form-control" value="{{ old('foto') }}">
					@error('foto')
						<span class="invalid-feedback text-danger">{{ $message }}</span>
					@enderror
				</div>

				<div class="form-group">
					<button class="btn btn-primary form-control" type="submit">Submit</button>
				</div>
			</form>
		</div>
	</div>
@stop

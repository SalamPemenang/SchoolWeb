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
					<input type="text" name="nama" class="form-control" required="" maxlength="50" placeholder="Masukan Nama Website Disini">
				</div>

				<div class="form-group">
					<input type="text" name="link" class="form-control" required="" maxlength="190" placeholder="Masukan Link Disini">
				</div>

				<div class="form-group">
					<span>Silahkan Pilih Gambar</span>
					<input type="file" name="foto" class="form-control" required="">
				</div>

				<div class="form-group">
					<button class="btn btn-primary form-control" type="submit">Submit</button>
				</div>
			</form>
		</div>
	</div>
@stop

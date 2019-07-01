@extends('layouts.admin-app')

@section('title')
Halaman Link
@stop

@section('content')

	<br><br>
	
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<h4>Masukan Data Yang Akan Diubah Dibawah Sini...</h4>
			<form action="{{ route('link.update', $link->id) }}" method="POST" enctype="multipart/form-data">
				@csrf

				<div class="form-group">
					<input type="text" name="nama" class="form-control" value="{{ $link->nama }}">
				</div>

				<div class="form-group">
					<input type="text" name="link" class="form-control" maxlength="190" value="{{ $link->link }}">
				</div>

				<div class="form-group">
					<span>Pilih Gambar Bila Ingin Diganti</span>
					<input type="file" name="foto" class="form-control" value="{{ $link->foto }}">
				</div>

				<div class="form-group">
					<button class="btn btn-primary form-control" type="submit">Submit</button>
				</div>
			</form>
		</div>
	</div>
@stop

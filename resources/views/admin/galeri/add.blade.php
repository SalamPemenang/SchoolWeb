@extends('layouts.admin-app')

@section('title')
Tambah Galleri
@stop

@section('content')

	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
				@csrf

				<div class="form-group">
					<label for="up">Upload Gambar :</label>
					<input type="file" name="foto" class="form-control" id="up" required="">
				</div>

				<div class="form-group">
					<select name="kategori" class="form-control" required="">
						<option value="">-Pilih Kategori-</option>
						<option value="">Kantin</option>
						<option value="">Perpustakaan</option>
					</select>
				</div>

				<div class="form-group">
					<button class="btn btn-primary form-control" type="submit">Submit</button>
				</div>
			</form>
		</div>
	</div>
@stop

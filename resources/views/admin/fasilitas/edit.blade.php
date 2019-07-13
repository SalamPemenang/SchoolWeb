@extends('layouts.admin-app')

@section('title')
Ubah Fasilitas
@stop

@section('content')
	<h4 class="text-center">Silahkan Ubah Data dibawah SIni...</h4>
	<br><br>

	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<form action="{{ route('fasilitas.update', $fasilitas->id) }}" method="POST" enctype="multipart/form-data">
				@csrf

				<div class="form-group">
					<label for="up">Upload Gambar :</label>
					<input type="file" name="foto" class="form-control" id="up">
					@error('foto')
						<span class="invalid-feedback text-danger">{{ $message }}</span>
					@enderror
				</div>

				<div class="form-group">
					<select name="kategori" class="form-control">
						<option value="{{ $fasilitas->id_category_fasilitas }}">{{ $fasilitas->id_category_fasilitas }}</option>
						@foreach( $categories as $category )
							<option value="{{ $category->id }}">{{ $category->nama }}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<button class="btn btn-primary form-control" type="submit">Submit</button>
				</div>
			</form>
		</div>
	</div>
@stop

@extends('layouts.admin-app')

@section('title')
Tambah Kategori Fasilitas
@stop

@section('content')

	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
			<form action="{{ route('GF.update', $category->id) }}" method="POST">
				@csrf

				<div class="form-group">
					<label for="name">Masukan Nama Kategori :</label>
					<input type="text" name="name" class="form-control" id="name" value="{{ $category->nama }}">
				</div>

				<div class="form-group">
					<button class="btn btn-primary form-control" type="submit">Submit</button>
				</div>
			</form>
		</div>
	</div>
@stop

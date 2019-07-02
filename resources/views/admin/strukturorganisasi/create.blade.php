@extends('layouts.admin-app')

@section('title')
Tambah Data Struktur Organisasi
@stop

@section('page-name')
Tambah Data 
@stop

@section('content')
<form action="{{ route('struktur.post') }}" method="post" enctype="multipart/form-data">
	@csrf
	<div class="form-group">
		<label for="foto">Foto*</label>
		<input type="file" name="foto" id="foto" required>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Simpan</button>
	</div>
</form>
@stop
@extends('layouts.admin-app')

@section('title')
ubah Data Struktur Organisasi
@stop

@section('page-name')
Ubah Data 
@stop

@section('content')
<form action="{{ route('struktur.update') }}" method="post" enctype="multipart/form-data">
	@csrf
	<input type="hidden" name="id" value="{{ $struktur->id }}">
	<div class="form-group">
		<label for="foto">Foto*</label>
		<input type="file" name="foto" id="foto" value="{{ $struktur->foto }}" required>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Simpan</button>
	</div>
</form>
@stop
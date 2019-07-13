@extends('layouts.admin-app')

@section('title')
Tambah Pengumuman
@stop

@section('content')
<form action="{{route('pengumuman.post')}}" method="post" enctype="multipart/form-data">
	@csrf
	<div class="form-group">
		<label for="judul">Judul *</label>
		<input type="text" name="judul" id="judul" class="form-control" autocomplete="off" value="{{ old('judul') }}" maxlength="30">
		@error('judul')
			<span class="invalid-feedback text-danger">{{ $message }}</span>
		@enderror
	</div>
	
	<div class="form-group">
		<label for="foto">Foto *</label>
		<input type="file" name="foto" id="foto">
		@error('foto')
			<span class="invalid-feedback text-danger">{{ $message }}</span>
		@enderror
	</div>
	
	<div class="form-group">
		<label for="tgl_lahir">Tangal Lahir *</label>
		<input type="date" name="tgl" id="tgl_lahir" class="form-control" autocomplete="off" value="{{ old('tgl_lahir') }}">
		@error('tgl')
			<span class="invalid-feedback text-danger">{{ $message }}</span>
		@enderror
	</div>

	<div class="form-group">
		<label for="deskripsi">Deskripsi *</label>
		<textarea id="deskripsi" name="deskripsi" style="width: 100%; height: 300px;">{{ old('deskripsi') }}</textarea>
		@error('deskripsi')
			<span class="invalid-feedback text-danger">{{ $message }}</span>
		@enderror
	</div>

	<div class="form-group">
		<button>Simpan</button>
	</div>
</form>
@stop
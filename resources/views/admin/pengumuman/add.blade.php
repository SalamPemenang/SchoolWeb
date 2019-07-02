@extends('layouts.admin-app')

@section('title')
Tambah Pengumuman
@stop

@section('content')
<form action="{{route('pengumuman.post')}}" method="post" enctype="multipart/form-data">
	@csrf
	<div class="form-group">
		<label for="judul">Judul *</label>
		<input type="text" name="judul" id="judul" class="form-control" autocomplete="off" required="" maxlength="30">
	</div>
	
	<div class="form-group">
		<label for="foto">Foto *</label>
		<input type="file" name="foto" id="foto" required="">
	</div>
	
	<div class="form-group">
		<label for="tgl_lahir">Tangal Lahir *</label>
		<input type="date" name="tgl" id="tgl_lahir" class="form-control" autocomplete="off" required="">
	</div>

	<div class="form-group">
		<label for="deskripsi">Deskripsi *</label>
		<textarea id="deskripsi" name="deskripsi" style="width: 100%; height: 300px;"></textarea>
	</div>

	<div class="form-group">
		<button>Simpan</button>
	</div>
</form>
@stop
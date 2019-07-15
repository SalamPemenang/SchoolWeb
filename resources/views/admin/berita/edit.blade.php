@extends('layouts.admin-app')

@section('title')
Edit berita
@stop

@section('content')
<form action="{{route('berita.post')}}" method="post" enctype="multipart/form-data">
	@csrf
	<input type="hidden" name="id" value="{{$berita->id}}">
	<div class="form-group">
		<label for="judul">Judul *</label>
		<input type="text" name="judul" id="judul" class="form-control" autocomplete="off" required="" maxlength="30" value="{{$berita->judul}}">
		@error('judul')
			<span class="invalid-feedback text-danger">{{ $message }}</span>
		@enderror
	</div>
	
	<div class="form-group">
		<label for="foto">Foto *</label>
		<input type="file" name="foto" id="foto" required=""><label>{{$berita->foto}}</label>
		@error('foto')
			<span class="invalid-feedback text-danger">{{ $message }}</span>
		@enderror
	</div>
	
	<div class="form-group">
		<label for="tgl">Tanggal Lahir *</label>
		<input type="date" name="tgl" id="tgl" class="form-control" autocomplete="off" required="" value="{{$berita->tgl}}">
		@error('tgl')
			<span class="invalid-feedback text-danger">{{ $message }}</span>
		@enderror
	</div>

	<div class="form-group">
		<label for="deskripsi">Deskripsi *</label>
		<textarea id="deskripsi" name="deskripsi" style="width: 100%; height: 300px;">{{$berita->deskripsi}}</textarea>
		@error('deskripsi')
			<span class="invalid-feedback text-danger">{{ $message }}</span>
		@enderror
	</div>

	<div class="form-group">
		<button>Simpan</button>
	</div>
</form>
@stop

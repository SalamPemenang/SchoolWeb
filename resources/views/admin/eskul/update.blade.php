@extends('layouts.admin-app')

@section('title')
	Ubah Data Ekstrakurikuler
@stop

@section('page-name')
	Ubah Data Ekstrakurikuler
@stop

@section('content')
	<form action="{{ route('eskul.update', $eskul->id) }}" method="POST">
		@csrf
		<div class="form-group">
			<label for="nama">Nama Ekstrakurikuler*</label>
			<input type="text" name="nama" id="nama" class="form-control" maxlength="50" value="{{ $eskul->nama }}">
			@error('nama')
				<span class="invalid-feedback text-danger">{{ $message }}</span>
			@enderror
		</div>
		<div class="form-group">
			<label for="pembimbing">Pembimbing*</label>
			<input type="text" name="pembimbing" id="pembimbing" class="form-control" maxlength="50" value="{{ $eskul->pembimbing }}">
			@error('pembimbing')
				<span class="invalid-feedback text-danger">{{ $message }}</span>
			@enderror
		</div>
		<div class="form-group">
			<label for="jadwal">Jadwal Kegiatan*</label>
			<input type="text" name="jadwal" id="jadwal" class="form-control" maxlength="50" value="{{ $eskul->jadwal }}">
			@error('jadwal')
				<span class="invalid-feedback text-danger">{{ $message }}</span>
			@enderror
		</div>
		<button type="submit" class="btn btn-primary col-lg-12">Simpan</button>
	</form>
@stop
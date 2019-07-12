@extends('layouts.admin-app')

@section('title')
	Tambah Ekstrakurikuler
@stop

@section('page-name')
	Tambah Data Ekstrkurikuler
@stop

@section('content')
	<form action="{{ route('eskul.post') }}" method="POST">
		@csrf
		<div class="form-group">
			<label for="nama">Nama Ekstrakurikuler*</label>
			<input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama') }}">
			@error('nama')
				<span class="invalid-feedback text-danger">{{ $message }}</span>
			@enderror
		</div>
		<div class="form-group">
			<label for="pembimbing">Pembimbing*</label>
			<input type="text" name="pembimbing" id="pembimbing" class="form-control" value="{{ old('pembimbing') }}">
			@error('pembimbing')
				<span class="invalid-feedback text-danger">{{ $message }}</span>
			@enderror
		</div>
		<div class="form-group">
			<label for="jadwal">Jadwal Kegiatan*</label>
			<input type="text" name="jadwal" class="form-control" id="jadwal" value="{{ old('jadwal') }}">
			@error('jadwal') 
				<span class="invalid-feedback text-danger">{{ $message }}</span>
			@enderror
		</div>
		<button type="submit" class="btn btn-primary col-lg-12">Simpan</button>
	</form>
@stop
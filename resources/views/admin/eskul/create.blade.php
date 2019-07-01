@extends('layouts.admin-app')

@section('title')
	Tambah Ekstrakurikuler
@stop

@section('page-name')
	Tambah Data Ekstrkurikuler
@stop

@section('content')
	<form action="{{ route('eskul.post') }}" method="post">
		@csrf
		<div class="form-group">
			<label for="nama">Nama Ekstrakurikuler*</label>
			<input type="text" name="nama" id="nama" class="form-control" maxlength="50" required autocomplete="off" placeholder="Isi Secara Benar!!">
		</div>
		<div class="form-group">
			<label for="pembimbing">Pembimbing*</label>
			<input type="text" name="pembimbing" id="pembimbing" class="form-control" maxlength="50" autocomplete="off" required placeholder="Isi Secara Benar!!">
		</div>
		<div class="form-group">
			<label for="jadwal">Jadwal Kegiatan*</label>
			<input type="text" name="jadwal" id="jadwal" class="form-control" maxlength="50" autocomplete="off" required placeholder="Isi Secara Benar!!">
		</div>
		<button type="submit" class="btn btn-info col-lg-12">Simpan</button>
	</form>
@stop
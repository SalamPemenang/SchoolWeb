@extends('layouts.admin-app')

@section('title')
	Tambah Data Profile Sekolah
@stop

@section('page-name')
	Tambah Data
@stop

@section('content')
	<form action="{{ route('profilesekolah.add') }}" method="post">
		@csrf
		<div class="form-group">
			<label for="nama">Nama Sekolah*</label>
			<input type="text" name="nama" class="form-control" maxlength="50" required autocomplete="off" id="nama">
		</div>
		<div class="form-group">
			<label for="npsn">NPSN*</label>
			<input type="text" name="npsn" class="form-control" maxlength="20" required autocomplete="off" id="npsn">
		</div>
		<div class="form-group">
			<label for="kode_un">Kode Ujian Nasional</label>
			<input type="text" name="kode_un" class="form-control" maxlength="5" required autocomplete="off" id="kode_un">
		</div>
		<div class="form-group">
			<label for="nis">NIS*</label>
			<input type="text" name="nis" class="form-control" maxlength="15" required autocomplete="off" id="nis">
		</div>
		<div class="form-group">
			<label for="website">Website*</label>
			<input type="text" name="website" class="form-control" maxlength="40" required autocomplete="off" id="website">
		</div>
		<div class="form-group">
			<label for="email">Email*</label>
			<input type="text" name="email" class="form-control" maxlength="40" required autocomplete="off" id="email">
		</div>
		<div class="form-group">
			<label for="no_sk">NO SK Sekolah*</label>
			<input type="text" name="no_sk_pendirian_sekolah" class="form-control" maxlength="50" required autocomplete="off" id="no_sk">
		</div>
		<div class="form-group">
			<label for="tgl">Tanggal Berdiri Sekolah*</label>
			<input type="date" name="tgl_pendirian" class="form-control" required id="tgl">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Simpan</button>
		</div>
	</form>
@stop
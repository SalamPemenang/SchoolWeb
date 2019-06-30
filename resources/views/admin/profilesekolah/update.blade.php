@extends('layouts.admin-app')

@section('title')
Ubah Data
@stop

@section('content')
<div class="row">
	<div class="col-md-3"></div>
	<div class="card col-md-5">
		<h3 align="center">
			<i class="fa fa-pencil"></i>	Ubah Data Sekolah
		</h3>
		<form action="/profilesekolah/{{ $profilesekolah->id }}" method="POST">
			{{csrf_field()}}
			{{ method_field('PUT') }}
			<input type="hidden" name="id" value="{{ $profilesekolah->id }}">
			<div class="form-group">
				<label>Nama Sekolah</label>
				<input type="text" name="nama" required minlength="15" maxlength="100" class="form-control" value="{{ $profilesekolah->nama }}">
			</div>
			<div class="form-group">
				<label>NPSN</label>
				<input type="text" name="npsn" minlength="8" maxlength="10" class="form-control" value="{{ $profilesekolah->npsn }}">
			</div>
			<div class="form-group">
				<label>Kode Ujian Nasional</label>
				<input type="text" name="kode_un" minlength="3" maxlength="5" class="form-control" value="{{ $profilesekolah->kode_un }}">
			</div>
			<div class="form-group">
				<label>NIS</label>
				<input type="text" name="nis" class="form-control col-md-5" minlength="10" maxlength="18" value="{{ $profilesekolah->nis }}">
			</div>
			<div class="form-group">
				<label>Website</label>
				<input type="text" name="website" class="form-control col-md-5" minlength="15" maxlength="50" value="{{ $profilesekolah->website }}">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="email" class="form-control col-md-5" minlength="7" maxlength="40" value="{{ $profilesekolah->email }}">
			</div>
			<div class="form-group">
				<label>No SK Berdiri Sekolah</label>
				<input type="text" name="no_sk_pendirian_sekolah" class="form-control col-md-5" maxlength="7" maxlength="15" value="{{ $profilesekolah->no_sk_pendirian_sekolah }}">
			</div>
			<div class="form-group">
				<label>Tanggal Berdiri Sekolah</label>
				<input type="text" name="tgl_pendirian" class="form-control col-md-5" minlength="8" maxlength="8" value="{{ $profilesekolah->tgl_pendirian }}">
			</div>
			<br>
			<br>
			<button type="submit" name="ubah_profile" class="btn btn-info col-md-12">Ubah</button>
		</form>
	</div>
</div>
@stop
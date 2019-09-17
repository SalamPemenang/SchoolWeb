@extends('layouts.admin-app')

@section('title')
	{{ $profilesekolah->nama }}
@stop

@section('page-name')
	 *{{ $profilesekolah->nama }}
@stop

@section('content')
	<form action="{{ route('profilesekolah') }}">
		@csrf
		<div class="form-group">
			<label for="logo">Logo*</label>
			<br>
			<img src="/image/profile_sekolah/logo/{{ $profilesekolah->logo }}" class="img-responsive img-thumbnail" width="200" title="Logo {{ $profilesekolah->nama }}">
		</div>
		<div class="form-group">
			<label for="nama">Nama Sekolah*</label>
			<input type="text" name="nama" class="form-control" value="{{ $profilesekolah->nama }}" id="nama" disabled>
		</div>
		<div class="form-group">
			<label for="npsn">NPSN*</label>
			<input type="text" name="npsn" class="form-control" value="{{ $profilesekolah->npsn }}" id="npsn" disabled>
		</div>
		<div class="form-group">
			<label for="nis">NIS*</label>
			<input type="text" name="nis" class="form-control" value="{{ $profilesekolah->nis }}" id="nis" disabled>
		</div>
		<div class="form-group">
			<label for="kode_un">Kode Ujian Nasional</label>
			<input type="text" name="kode_un" class="form-control" value="{{ $profilesekolah->kode_un }}" id="kode_un" disabled>
		</div>
		<div class="form-group">
			<label for="alamat">Alamat*</label>
			<textarea name="alamat" class="form-control" id="alamat" disabled>{{ $profilesekolah->alamat }}</textarea>
		</div>
		<div class="form-group">
			<label for="no_hp">No Telepon*</label>
			<input type="text" name="no_hp" class="form-control" value="{{ $profilesekolah->no_hp }}" id="no_hp" disabled>
		</div>
		<div class="form-group">
			<label for="faximile">Faximile*</label>
			<input type="text" name="faximile" class="form-control" maxlength="20" value="{{ $profilesekolah->faximile }}" disabled id="faximile">
		</div>
		<div class="form-group">
			<label for="no_sk">NO SK Sekolah*</label>
			<input type="text" name="no_sk_pendirian_sekolah" class="form-control" value="{{ $profilesekolah->no_sk_pendirian_sekolah }}" id="no_sk" disabled>
		</div>
		<div class="form-group">
			<label for="tgl">Tanggal Berdiri Sekolah*</label>
			<input type="text" name="tgl_pendirian" class="form-control" value="{{ $profilesekolah->tgl_pendirian }}" id="tgl" disabled>
		</div>
		<div class="form-group">
			<label for="website">Website*</label>
			<input type="text" name="website" class="form-control" value="{{ $profilesekolah->website }}" id="website" disabled>
		</div>
		<div class="form-group">
			<label for="email">Email*</label>
			<input type="text" name="email" class="form-control" value="{{ $profilesekolah->email }}" id="email" disabled>
		</div>
		<div class="form-group">
			<label for="facebook">Akun Facebook*</label>
			<input type="text" name="facebook" class="form-control" value="{{ $profilesekolah->facebook }}" id="facebook" disabled>
		</div>
		<div class="form-group">
			<label for="twitter">Akun Twitter*</label>
			<input type="text" name="twitter" class="form-control" value="{{ $profilesekolah->twitter }}" id="twitter" disabled>
		</div>
		<div class="form-group">
			<label for="instagram">Akun Instagram*</label>
			<input type="text" name="instagram" class="form-control" value="{{ $profilesekolah->instagram}}" id="instagram" disabled>
		</div>
		<div class="form-group">
			<label for="maps">Peta Lokasi*</label>
			<br>
			<iframe src="{{ $profilesekolah->maps }}" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-warning">Kembali</button>
		</div>
	</form>
@stop


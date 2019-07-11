@extends('layouts.admin-app')

@section('title')
	Ubah Data Profile Sekolah
@stop

@section('page-name')
	 Ubah Data
@stop

@section('content')
	<form action="{{ route('profilesekolah.post', $profilesekolah->id) }}" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label for="logo">Logo*</label>
			<br>
			<div class="div_image"></div>
			<input type="file" name="logo" class="form-control" id="logo">
			<span for="id">{{ $profilesekolah->logo }}</span>
			<br>
			@error('logo')
				<span class="invalid-feedback text-danger">{{ $message }}</span>
			@enderror
		</div>
		<div class="form-group">
			<label for="nama">Nama Sekolah*</label>
			<input type="text" name="nama" class="form-control" value="{{ $profilesekolah->nama }}" id="nama">
			@error('nama')
				<span class="invalid-feedback text-danger">{{ $message }}</span>
			@enderror
		</div>
		<div class="form-group">
			<label for="npsn">NPSN*</label>
			<input type="text" name="npsn" class="form-control" value="{{ $profilesekolah->npsn }}" id="npsn">
			@error('npsn')
				<span class="invalid-feedback text-danger">{{ $message }}</span>
			@enderror
		</div>
		<div class="form-group">
			<label for="nis">NIS*</label>
			<input type="text" name="nis" class="form-control" value="{{ $profilesekolah->nis }}" id="nis">
			@error('nis')
				<span class="invalid-feedback text-danger">{{ $message }}</span>
			@enderror
		</div>
		<div class="form-group">
			<label for="kode_un">Kode Ujian Nasional</label>
			<input type="text" name="kode_un" class="form-control" value="{{ $profilesekolah->kode_un }}" id="kode_un">
			@error('kode_un')
				<span class="invalid-feedback text-danger">{{ $message }}</span>
			@enderror
		</div>
		<div class="form-group">
			<label for="alamat">Alamat*</label>
			<textarea name="alamat" class="form-control" id="alamat">{{ $profilesekolah->alamat }}</textarea>
			@error('alamat')
				<span class="invalid-feedback text-danger">{{ $message }}</span>
			@enderror
		</div>
		<div class="form-group">
			<label for="no_hp">No Telepon*</label>
			<input type="text" name="no_hp" class="form-control" value="{{ $profilesekolah->no_hp }}" id="no_hp">
			@error('no_hp')
				<span class="invalid-feedback text-danger">{{ $message }}</span>
			@enderror
		</div>
		<div class="form-group">
			<label for="no_sk">NO SK Sekolah*</label>
			<input type="text" name="no_sk_pendirian_sekolah" class="form-control" value="{{ $profilesekolah->no_sk_pendirian_sekolah }}" id="no_sk">
			@error('no_sk_pendirian_sekolah')
				<span class="invalid-feedback text-danger">{{ $message }}</span>
			@enderror
		</div>
		<div class="form-group">
			<label for="tgl">Tanggal Berdiri Sekolah*</label>
			<input type="text" name="tgl_pendirian" class="form-control" value="{{ $profilesekolah->tgl_pendirian }}" id="tgl">
			@error('tgl_pendirian')
				<span class="invalid-feedback text-danger">{{ $message }}</span>
			@enderror
		</div>
		<div class="form-group">
			<label for="website">Website*</label>
			<input type="text" name="website" class="form-control" value="{{ $profilesekolah->website }}" id="website">
			@error('website')
				<span class="invalid-feedback text-danger">{{ $message }}</span>
			@enderror
		</div>
		<div class="form-group">
			<label for="email">Email*</label>
			<input type="text" name="email" class="form-control" value="{{ $profilesekolah->email }}" id="email">
			@error('email')
				<span class="invalid-feedback text-danger">{{ $message }}</span>
			@enderror
		</div>
		<div class="form-group">
			<label for="facebook">Akun Facebook*</label>
			<input type="text" name="facebook" class="form-control" value="{{ $profilesekolah->facebook }}" id="facebook">
			@error('facebook')
				<span class="invalid-feedback text-danger">{{ $message }}</span>
			@enderror
		</div>
		<div class="form-group">
			<label for="twitter">Akun Twitter*</label>
			<input type="text" name="twitter" class="form-control" value="{{ $profilesekolah->twitter }}" id="twitter">
			@error('twitter')
				<span class="invalid-feedback text-danger">{{ $message }}</span>
			@enderror
		</div>
		<div class="form-group">
			<label for="instagram">Akun Instagram*</label>
			<input type="text" name="instagram" class="form-control" value="{{ $profilesekolah->instagram}}" id="instagram">
			@error('instagram')
				<span class="invalid-feedback text-danger">{{ $message }}</span>
			@enderror
		</div>
		<div class="form-group">
			<label for="maps">Peta Lokasi*</label>
			<input type="text" name="maps" class="form-control" value="{{ $profilesekolah->maps }}" id="maps">
			@error('maps')
				<span class="invalid-feedback text-danger">{{ $message }}</span>
			@enderror
		</div>
		<div class="form-group">
			<a href="{{ route('profilesekolah') }}" class="btn btn-warning">Kembali</a>
			<button type="submit" class="btn btn-primary">simpan</button>
		</div>
	</form>
@stop
@push('scripts')
<script>
	$(function() {
		var imagesPreview = function(input, placeToInsertImagePreview) {

			if (input.files) {
				var filesAmount = input.files.length;

				for (i = 0; i < filesAmount; i++) {
					var reader = new FileReader();

					reader.onload = function(event) {
						$($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
					}

					reader.readAsDataURL(input.files[i]);
				}
			}

		};

		$('input#logo').on('change', function() {
			imagesPreview(this, '.div_image');
		});
	});
</script>
@endpush

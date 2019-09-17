@extends('layouts.admin-app')

@section('title')
	Tambah Data Profile Sekolah
@stop

@section('page-name')
	Tambah Data
@stop

@section('content')
	<form action="{{ route('profilesekolah.add') }}" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label for="logo">Logo*</label>
			<br>
			<div class="card img-thumbnail div_image"></div>
			<input type="file" name="logo" class="form-control" value="{{ old('logo') }}" multiple id="logo">
			@error('logo')
				<span class="invalid-feedback text-danger">
					 <strong>{{ $message }}</strong>
				 </span>
			@enderror
		</div>
		<div class="form-group">
			<label for="nama">Nama Sekolah*</label>
			<input type="text" name="nama" class="form-control" value="{{ old('nama') }}" minlength="3" maxlength="50" autocomplete="off" id="nama">
			@error('nama')
				<span class="invalid-feedback text-danger">
					 <strong>{{ $message }}</strong>
				 </span>
			@enderror
		</div>
		<div class="form-group">
			<label for="npsn">NPSN*</label>
			<input type="text" name="npsn" class="form-control" value="{{ old('npsn') }}" minlength="4" maxlength="20" autocomplete="off" id="npsn">
			@error('npsn')
				<span class="invalid-feedback text-danger">
					 <strong>{{ $message }}</strong>
				 </span>
			@enderror
		</div>
		<div class="form-group">
			<label for="nis">NIS*</label>
			<input type="text" name="nis" class="form-control" value="{{ old('nis') }}" minlength="4" maxlength="15" autocomplete="off" id="nis">
			@error('nis')
				<span class="invalid-feedback text-danger">
					 <strong>{{ $message }}</strong>
				 </span>
			@enderror
		</div>
		<div class="form-group">
			<label for="kode_un">Kode Ujian Nasional</label>
			<input type="text" name="kode_un" class="form-control" value="{{ old('kode_un') }}" minlength="3" maxlength="5"  autocomplete="off" id="kode_un">
			@error('kode_un')
				<span class="invalid-feedback text-danger">
					 <strong>{{ $message }}</strong>
				 </span>
			@enderror
		</div>
		<div class="form-group">
			<label for="alamat">Alamat*</label>
			<textarea name="alamat" class="form-control" maxlength="225" autocomplete="off" minlength="10" maxlength="255" id="alamat">{{ old('alamat') }}</textarea>
			@error('alamat')
				<span class="invalid-feedback text-danger">
					 <strong>{{ $message }}</strong>
				 </span>
			@enderror
		</div>
		<div class="form-group">
			<label for="no_hp">No Telepon*</label>
			<input type="text" name="no_hp" class="form-control" maxlength="15" value="{{ old('no_hp') }}" minlength="8" autocomplete="off"  id="no_hp">
			@error('no_hp')
				<span class="invalid-feedback text-danger">
					 <strong>{{ $message }}</strong>
				 </span>
			@enderror
		</div>
		<div class="form-group">
			<label for="faximile">Faximile*</label>
			<input type="text" name="faximile" class="form-control" maxlength="20" value="{{ old('faximile') }}" minlength="10" autocomplete="off" id="faximile">
			@error('faximile')
				<span class="invalid-feedback text-danger">
					<strong>{{ $message }}</strong>
				</span>
			@enderror
		</div>
		<div class="form-group">
			<label for="no_sk">NO SK Sekolah*</label>
			<input type="text" name="no_sk_pendirian_sekolah" class="form-control" minlength="6" maxlength="50" value="{{ old('no_sk_pendirian_sekolah') }}"  autocomplete="off" id="no_sk">
			@error('no_sk_pendirian_sekolah')
				<span class="invalid-feedback text-danger">
					 <strong>{{ $message }}</strong>
				 </span>
			@enderror
		</div>
		<div class="form-group">
			<label for="tgl">Tanggal Berdiri Sekolah*</label>
			<input type="date" name="tgl_pendirian" class="form-control tanggal" value="{{ old('tgl_pendirian') }}" id="tgl">
			@error('tgl_pendirian')
				<span class="invalid-feedback text-danger">
					 <strong>{{ $message }}</strong>
				 </span>
			@enderror
		</div>
		<div class="form-group">
			<label for="website">Website*</label>
			<input type="text" name="website" class="form-control" minlength="7" maxlength="40"  autocomplete="off" value="{{ old('website') }}" id="website">
			@error('website')
				<span class="invalid-feedback text-danger">
					 <strong>{{ $message }}</strong>
				 </span>
			@enderror
		</div>
		<div class="form-group">
			<label for="email">Email*</label>
			<input type="text" name="email" class="form-control" minlength="8" maxlength="40"  autocomplete="off" value="{{ old('email') }}"  id="email">
			@error('email')
				<span class="invalid-feedback text-danger">
					 <strong>{{ $message }}</strong>
				 </span>
			@enderror
		</div>
		<div class="form-group">
			<label for="facebook">Akun Facebook*</label>
			<input type="text" name="facebook" class="form-control" minlength="8" maxlength="40"  autocomplete="off" value="{{ old('facebook') }}" id="facebook">
			@error('facebook')
				<span class="invalid-feedback text-danger">
					 <strong>{{ $message }}</strong>
				 </span>
			@enderror
		</div>
		<div class="form-group">
			<label for="twitter">Akun Twitter*</label>
			<input type="text" name="twitter" class="form-control" minlength="8" maxlength="40"  autocomplete="off" value="{{ old('twitter') }}" id="twitter">
			@error('twitter')
				<span class="invalid-feedback text-danger">
					 <strong>{{ $message }}</strong>
				 </span>
			@enderror
		</div>
		<div class="form-group">
			<label for="instagram">Akun Instagram*</label>
			<input type="text" name="instagram" class="form-control" minlength="8" maxlength="40"  autocomplete="off" value="{{ old('instagram') }}" id="instagram">
			@error('instagram')
				<span class="invalid-feedback text-danger">
					 <strong>{{ $message }}</strong>
				 </span>
			@enderror
		</div>
		<div class="form-group">
			<label for="maps">URL Peta Lokasi*</label>
			<input type="text" name="maps" class="form-control" minlength="10" maxlength="440" autocomplete="off" value="{{ old('maps') }}" id="maps">
			@error('maps')
				<span class="invalid-feedback text-danger">
					 <strong>{{ $message }}</strong>
				 </span>
			@enderror
		</div>
		<div class="form-group">
			<a href="{{ route('profilesekolah') }}" class="btn btn-warning">Kembali</a>
			<button type="submit" class="btn btn-primary">Simpan</button>
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
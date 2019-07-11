@extends('layouts.admin-app')

@section('title')
Tambah Data Struktur Organisasi
@stop

@section('page-name')
Tambah Data 
@stop

@section('content')
<form action="{{ route('struktur.post') }}" method="post" enctype="multipart/form-data">
	@csrf
	<div class="form-group">
		<label for="uploadImage">Foto*</label>
		<br>
		<div class="div_image"></div>
		<input type="file" name="foto" class="form-control" multiple id="uploadImage">
		@error('foto')
			<span class="invalid-feedback text-danger">{{ $message }}</span>
		@enderror
	</div>
	<div class="form-group">
		<a href="{{ route('struktur') }}" class="btn btn-warning">Kembali</a>
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

		$('input#uploadImage').on('change', function() {
			imagesPreview(this, '.div_image');
		});
	});
</script>
@endpush
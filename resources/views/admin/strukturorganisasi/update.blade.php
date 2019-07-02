@extends('layouts.admin-app')

@section('title')
ubah Data Struktur Organisasi
@stop

@section('page-name')
Ubah Data 
@stop

@section('content')
<form action="{{ route('struktur.update', $struktur->id) }}" method="POST" enctype="multipart/form-data">
	@csrf
	<div class="form-group">
		<label for="foto">Foto*</label>
		<br>
		<div class="div_image"></div>
		<input type="file" name="foto" class="form-control" multiple id="uploadImage" value="{{ $struktur->foto }}" required>
		<sup><label for="foto">{{ $struktur->foto }}</label></sup>
	</div>
	<div class="form-group">
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
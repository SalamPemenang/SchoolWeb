@extends('layouts.admin-app')

@section('title')
Tambah Pengumuman
@stop

@section('content')
<form action="{{route('pengumuman.post')}}" method="post" enctype="multipart/form-data">
	@csrf
	<div class="form-group">
		<label for="judul">Judul *</label>
		<input type="text" name="judul" id="judul" class="form-control" autocomplete="off" value="{{ old('judul') }}" maxlength="50">
		@error('judul')
			<span class="invalid-feedback text-danger">{{ $message }}</span>
		@enderror
	</div>
	
	<div class="form-group">
		<label for="foto">Foto *</label>
		<input type="file" name="foto" id="foto">
		@error('foto')
			<span class="invalid-feedback text-danger">{{ $message }}</span>
		@enderror
	</div>
	
	<div class="form-group">
		<label for="tgl_lahir">Tangal *</label>
		<input type="date" name="tgl" id="tgl_lahir" class="form-control" autocomplete="off" value="{{ old('tgl_lahir') }}">
		@error('tgl')
			<span class="invalid-feedback text-danger">{{ $message }}</span>
		@enderror
	</div>

	<section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Deskripsi
              	@error('deskripsi')
              	<small>{{ $message }}</small>
              	@enderror
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <textarea name="deskripsi" class="form-control">{{ old('deskripsi') }}</textarea>
          </div>
      </div>
      <!-- ./row -->
    </section>

	<div class="form-group">
		<button>Simpan</button>
	</div>
</form>
@stop

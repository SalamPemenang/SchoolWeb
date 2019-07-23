@extends('layouts.admin-app')

@section('title')
Edit pengumuman
@stop

@section('content')
<form action="{{route('pengumuman.post')}}" method="post" enctype="multipart/form-data">
	@csrf
	<input type="hidden" name="id" value="{{$pengumuman->id}}">
	<div class="form-group">
		<label for="judul">Judul *</label>
		<input type="text" name="judul" id="judul" class="form-control" autocomplete="off"r maxlength="30" value="{{$pengumuman->judul}}">
		@error('judul')
			<span class="invalid-feedback text-danger">{{ $message }}</span>
		@enderror
	</div>
	
	<div class="form-group">
		<label for="foto">Foto *</label>
		<input type="file" name="foto" id="foto" required=""><label>{{$pengumuman->foto}}</label>
		@error('foto')
			<span class="invalid-feedback text-danger">{{ $message }}</span>
		@enderror
	</div>
	
	<div class="form-group">
		<label for="tgl">Tanggal Lahir *</label>
		<input type="date" name="tgl" id="tgl" class="form-control" autocomplete="off" required="" value="{{$pengumuman->tgl}}">
		@error('tgl')
			<span class="invalid-feedback text-danger">{{ $message }}</span>
		@enderror
	</div>

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
            <!-- /.box-header -->
            <div class="box-body pad">
                    <textarea id="editor1" name="deskripsi" rows="10" cols="80">
                    	{{$pengumuman->deskripsi}}
                    </textarea>
            </div>
          </div>

	<div class="form-group">
		<button type="submit">Simpan</button>
	</div>
</form>
@stop
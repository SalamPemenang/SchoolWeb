@extends('layouts.admin-app')

@section('title')
Tambah Guru
@stop

@section('content')
<form action="{{route('guru.post')}}" method="post">
	@csrf
	<div class="form-group">
		<label for="nuptk">NUPTK *</label>
		<input type="text" name="nuptk" id="nuptk" class="form-control" autocomplete="off">
	</div>
	<div class="form-group">
		<label for="nama">Nama *</label>
		<input type="text" name="nama" id="nama" class="form-control" autocomplete="off">
	</div>
	<div class="form-group">
		<label for="jk">Jenis Kelamin *</label>
		<input type="radio" name="jk" id="jk" value="L">L
		<input type="radio" name="jk" id="jk" value="P">P
	</div>
	<div class="form-group">
		<label for="tgl_lahir">Tanggal lahir *</label>
		<input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control">
	</div>
	<div class="form-group">
		<label for="tmpt_lahir">Tempat lahir *</label>
		<input type="text" name="tmpt_lahir" id="tmpt_lahir" autocomplete="off" class="form-control">
	</div>
	<div class="form-group">
		<label for="alamat">Alamat *</label>
		<textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control"></textarea>
	</div>
	<div class="form-group">
		<button>Simpan</button>
	</div>
</form>
@stop
@extends('layouts.admin-app')

@section('title')
Tambah Guru
@stop

@section('content')
<form action="{{route('guru.post')}}" method="post">
	@csrf

	<input type="hidden" name="id" value="{{$guru->id}}">
	<div class="form-group">
		<label for="nuptk">NUPTK *</label>
		<input type="text" name="nuptk" id="nuptk" class="form-control"  autocomplete="off" required="" maxlength="15" value="{{$guru->nuptk}}">
	</div>

	<div class="form-group">
		<label for="nip">NIP *</label>
		<input type="text" name="nip" id="nip" class="form-control" autocomplete="off" required="" maxlength="15" value="{{$guru->nip}}">
	</div>

	<div class="form-group">
		<label for="nama">Nama *</label>
		<input type="text" name="nama" id="nama" class="form-control" autocomplete="off" required="" maxlength="50" value="{{$guru->nama}}">
	</div>

	<div class="form-group">
		<label for="jk">Jenis Kelamin *</label>
		<input type="radio" name="jk" id="jk" value="L">L
		<input type="radio" name="jk" id="jk" value="P">P
	</div>

	<div class="form-group">
		<label for="tgl_lahir">Tanggal lahir *</label>
		<input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control"  value="{{$guru->tgl_lahir}}">
	</div>

	<div class="form-group">
		<label for="tmpt_lahir">Tempat lahir *</label>
		<input type="text" name="tmpt_lahir" id="tmpt_lahir" autocomplete="off" class="form-control" value="{{$guru->tmpt_lahir}}"  required="" maxlength="50">
	</div>

	<div class="form-group">
		<label for="alamat">Alamat *</label>
		<textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control"  required="" maxlength="50">{{$guru->alamat}}</textarea>
	</div>

	<div class="form-group">
		<button>Simpan</button>
	</div>
</form>
@stop
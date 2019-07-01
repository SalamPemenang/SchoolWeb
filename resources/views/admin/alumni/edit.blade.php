@extends('layouts.admin-app')

@section('title')
Edit Alumni
@stop

@section('content')
<form action="{{route('alumni.post')}}" method="post" enctype="multipart/form-data">
	@csrf

	<div class="form-group">
		<label for="nama">Nama *</label>
		<input type="text" name="nama" id="nama" class="form-control" autocomplete="off" required="" maxlength="50" value="{{$alumni->nama}}">
	</div>

	<div class="form-group">
		<label for="jk">Jenis Kelamin *</label>
		<input type="radio" name="jk" id="jk" value="L">L
		<input type="radio" name="jk" id="jk" value="P">P
	</div>

	<div class="form-group">
		<label for="thn_lulus">Tahun Lulus *</label>
		<input type="text" name="thn_lulus" id="thn_lulus" class="form-control" autocomplete="off" required="" value="{{$alumni->thn_lulus}}">
	</div>

	<div class="form-group">
		<label for="foto">Foto *</label>
		<input type="file" name="foto" id="foto" required="">
		<label>{{$alumni->foto}}</label>
	</div>	

	<div class="form-group">
		<label for="pendidikan_lanjutan">Pendidikan Lanjutan *</label>
		<input type="text" name="pendidikan_lanjutan" id="pendidikan_lanjutan" autocomplete="off" class="form-control" required="" maxlength="50" value="{{$alumni->pendidikan_lanjutan}}">
	</div>

	<div class="form-group">
		<button>Simpan</button>
	</div>
</form>
@stop
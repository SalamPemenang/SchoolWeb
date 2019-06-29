@extends('layouts.admin-app')

@section('title')
Tambah Kelas
@stop

@section('content')
<form action="{{route('kelas.post')}}" method="post">
	@csrf
	<div class="form-group">
		<label for="kelas">Kelas *</label>
		<input type="text" name="kelas" id="kelas" class="form-control" autocomplete="off">
	</div>
	<div class="form-group">
		<button>Simpan</button>
	</div>
</form>
@stop
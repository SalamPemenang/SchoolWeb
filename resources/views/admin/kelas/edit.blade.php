@extends('layouts.admin-app')

@section('title')
Edit Kelas
@stop

@section('content')
<form action="{{route('kelas.post')}}" method="post">
	@csrf
	<input type="hidden" name="id" value="{{$kelas->id}}">
	<div class="form-group">
		<label for="kelas">Kelas *</label>
		<input type="text" name="kelas" id="kelas" class="form-control" autocomplete="off" value="{{$kelas->kelas}}">
	</div>
	<div class="form-group">
		<button>Simpan</button>
	</div>
</form>
@stop
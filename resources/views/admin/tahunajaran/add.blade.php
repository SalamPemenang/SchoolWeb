@extends('layouts.admin-app')

@section('title')
Tambah tahun ajaran
@stop

@section('content')
<form action="{{route('tahun.post')}}" method="post">
	@csrf
	<div class="form-group">
		<label for="tahun_ajaran">Tahun ajaran *</label>
		<input type="text" name="tahun_ajaran" id="tahun_ajaran" class="form-control" autocomplete="off">
	</div>
	<div class="form-group">
		<button>Simpan</button>
	</div>
</form>
@stop
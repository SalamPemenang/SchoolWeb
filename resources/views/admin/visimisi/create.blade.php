@extends('layouts.admin-app')

@section('title')
	Tambah Data Visi dan Misi
@stop

@section('page-name')
	Tambah Data
@stop

@section('content')
	<div class="card col-md-5">
			<form action="{{ route('visimisi.add') }}" method="POST">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="visi">Visi*</label>
					<textarea name="visi" id="visi" cols="95" rows="3"></textarea>
					@error('visi')
						<span class="invalid-feedback text-danger">{{ $message }}</span>
					@enderror
				</div>
				<div class="form-group">
					<label for="misi">Misi*</label>
					<textarea name="misi" id="misi" cols="95" rows="3"></textarea>
					@error('misi')
						<span class="invalid-feedback text-danger">{{ $message }}</span>
					@enderror
				</div>
				<a href="{{ route('visimisi') }}" class="btn btn-warning">Kembali</a>
				<button type="submit" class="btn btn-primary" title="Simpan data">Simpan</button>
			</form>
		</div>
@stop
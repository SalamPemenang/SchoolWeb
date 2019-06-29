@extends('layouts.admin-app')

@section('title')
	Tambah Data Visi dan Misi
@endsection

@section('page-name')
	Tambah Data
@endsection

@section('content')
	<div class="card col-md-5">
			<form action="{{ route('visimisi.add') }}" method="POST">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="visi">Visi</label>
					<textarea name="visi" id="visi" cols="95" rows="3"></textarea>
				</div>
				<div class="form-group">
					<label for="misi">Misi</label>
					<textarea name="misi" id="misi" cols="95" rows="3"></textarea>
				</div>
				<button type="submit" class="btn btn-info col-md-12 col-md-offset-3">Simpan</button>
			</form>
		</div>
@endsection
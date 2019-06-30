@extends('layouts.admin-app')

@section('title')
Ubah Data Visi dan Misi
@endsection

@section('page-name')
Ubah Data Visi dan Misi
@endsection

@section('content')
		<div class="card col-md-5">
			<form action="/visimisi/{{ $visimisi->id }}" method="POST">
				{{ csrf_field() }}
				{{ method_field('PUT') }}
				<input type="hidden" name="id" value="{{ $visimisi->id }}">
				<div class="form-group">
					<label for="visi">Visi</label>
					<textarea name="visi" id="visi" cols="95" rows="3">{{ $visimisi->visi }}</textarea>
				</div>
				<div class="form-group">
					<label for="misi">Misi</label>
					<textarea name="misi" id="misi" cols="95" rows="3">{{ $visimisi->misi }}</textarea>
				</div>
				<button type="submit" class="btn btn-info col-md-12 col-md-offset-3">Ubah Data</button>
			</form>
		</div>
@endsection
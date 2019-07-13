@extends('layouts.admin-app')

@section('title')
Ubah Data Visi dan Misi
@stop

@section('page-name')
Ubah Data Visi dan Misi
@stop

@section('content')
			<form action="{{ route('visimisi.post',$visimisi->id) }}" method="POST">
				@csrf
				<div class="form-group">
					<label for="visi">Visi</label>
					<textarea name="visi" class="form-control" id="visi" minlength="20" maxlength="190">{{ $visimisi->visi }}</textarea>
					@error('visi')
						<span class="invalid-feedback text-danger">{{ $message }}</span>
					@enderror
				</div>
				<div class="form-group">
					<label for="misi">Misi</label>
					<textarea name="misi" id="misi" class="form-control" minlength="20" maxlength="190">{{ $visimisi->misi }}</textarea>
					@error('misi')
						<span class="invalid-feedback text-danger">{{ $message }}</span>
					@enderror
				</div>
				<div class="form-group">
					<a href="{{ route('visimisi') }}" class="btn btn-warning">Kembali</a>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</form>
@stop
@extends('layouts.admin-app')

@section('title')
	Profile Sekolah
@endsection

@section('page-name')
	Profile Sekolah
@endsection

@section('content')
	@foreach($profilesekolah as $ps)
		<div class="row">
			<div class="col-md-4">
				<h3>{{ $ps->nama }}</h3>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-2">
				<label>NPSN</label>
			</div>
			<div class="col-md-5">: {{ $ps->npsn }}</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<label>Kode Ujian Nasional</label> 
			</div>
			<div class="col-md-5">: {{ $ps->kode_un }}</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<label>NIS</label> 
			</div>
			<div class="col-md-5">: {{ $ps->nis }}</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<label>Website</label> 
			</div>
			<div class="col-md-5">: {{ $ps->website }}</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<label>NO SK Pendirian Sekolah</label> 
			</div>
			<div class="col-md-5">: {{ $ps->no_sk_pendirian_sekolah }}</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<label>Tanggal Berdiri Sekolah</label> 
			</div>
			<div class="col-md-5">: {{ $ps->tgl_pendirian }}</div>
		</div>
		<a href="/profilesekolah/{{ $ps->id }}/edit" class="btn btn-info btn-sm float-right"><i class="fa fa-pencil"></i>Ubah Data</a>
	@endforeach
@endsection
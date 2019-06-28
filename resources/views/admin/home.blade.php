@extends('layouts.admin-app')
@section('title')
Dasbor
@stop
@section('content')
@if (session('status'))
<div class="alert alert-success" role="alert">
	{{ sessssion('status') }}
</div>
@endif
Selamat Datang Di Halaman Dashboard
@stop
@section('page-name')
<i class="fa fa-dashboard"></i> Dashboard
@stop
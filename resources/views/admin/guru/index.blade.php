@extends('layouts.admin-app')

@section('title')
Guru
@stop

@section('content')
	<a href="{{route('guru.tambah')}}">Tambah Guru</a><br><br>
	<table id="guru">
		<tr>
			<th>id</th>
			<th>nuptk</th>
			<th>nama</th>
			<th>jenis kelamin</th>
			<th>tanggal lahir</th>
			<th>tempat lahir</th>
			<th>alamat</th>
		</tr>
	</table>
@stop
@push('scripts')
<script>
	$(function(){
		$('#guru').DataTable({
		order: [[0, 'desc']],
    processing: true,
    responsive: true,
    serverSide: true,
    ajax: '{!! route('guru.data') !!}',
    columns: [
    {data: 'id', name: 'id', width: '15px'},
    {data: 'nuptk', name: 'nuptk', width: '20px'},
    {data: 'nama', name: 'nama', width: '20px'},
    {data: 'jk', name: 'jk', width: '20px'},
    {data: 'tmpt_lahir', name: 'tmpt_lahir'},
    {data: 'tgl_lahir', name: 'tgl_lahir'},
    {data: 'alamat', name: 'alamat'},
    {data: 'action', name: 'action', width: '100px', orderable: false, searchable: false,},
    ]
		});
	});
</script>
@endpush
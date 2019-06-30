@extends('layouts.admin-app')

@section('title')
Guru
@stop

@section('content')
	<a href="{{route('guru.tambah')}}">Tambah Guru</a><br><br>
	<table id="guru">
		<thead>
			<tr role="row">
				<th>no</th>
				<th>nuptk</th>
				<th>nama</th>
				<th>jenis kelamin</th>
				<th>tempat lahir</th>
				<th>tanggal lahir</th>
				<th>alamat</th>
				<th>action</th>
			</tr>
		</thead>
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
    {data: 'id', name: 'id', width: '15px', orderable: true},
    {data: 'nuptk', name: 'nuptk', width: '20px', orderable: true},
    {data: 'nama', name: 'nama', width: '20px', orderable: true},
    {data: 'jk', name: 'jk', width: '20px', orderable: true},
    {data: 'tmpt_lahir', name: 'tmpt_lahir', orderable: true},
    {data: 'tgl_lahir', name: 'tgl_lahir', orderable: true},
    {data: 'alamat', name: 'alamat', orderable: true,},
    {data: 'action', name: 'action', width: '100px', orderable: false, searchable: false,},
    ]
		});
	});
</script>
@endpush
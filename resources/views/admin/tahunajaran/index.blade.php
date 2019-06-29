@extends('layouts.admin-app')

@section('title')
Tahun Ajaran
@stop

@section('content')
	<a href="">Tambah tahun ajaran</a><br><br>
	<table id="tahunAjaran">
		<tr>
			<th>id</th>
			<th>tahun ajaran</th>
			<th>created_at</th>
			<th>updated_at</th>
		</tr>
	</table>
@stop
@push('scripts')
<script>
	$(function(){
		$('#tahunAjaran').DataTable({
		order: [[0, 'desc']],
    processing: true,
    responsive: true,
    serverSide: true,
    ajax: '{!! route('tahun.data') !!}',
    columns: [
    {data: 'id', name: 'id', width: '15px'},
    {data: 'tahun_ajaran', name: 'tahun_ajaran', width: '20px'},
    {data: 'created_at', name: 'created_at', width: '20px'},
    {data: 'updated_at', name: 'updated_at', width: '20px'},
    {data: 'action', name: 'action', width: '100px', orderable: false, searchable: false,},
    ]
		});
	});
</script>
@endpush
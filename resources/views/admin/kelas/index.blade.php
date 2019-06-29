@extends('layouts.admin-app')

@section('title')
Kelas
@stop

@section('content')
	<a href="{{route('kelas.tambah')}}">Tambah Kelas</a><br><br>
	<table id="kelas">
		<tr>
			<th>id</th>
			<th>kelas</th>
			<th>created_at</th>
			<th>updated_at</th>
		</tr>
	</table>
@stop
@push('scripts')
<script>
	$(function(){
		$('#kelas').DataTable({
		order: [[0, 'desc']],
    processing: true,
    responsive: true,
    serverSide: true,
    ajax: '{!! route('kelas.data') !!}',
    columns: [
    {data: 'id', name: 'id', width: '15px'},
    {data: 'kelas', name: 'kelas', width: '20px'},
    {data: 'created_at', name: 'created_at', width: '20px'},
    {data: 'updated_at', name: 'updated_at', width: '20px'},
    {data: 'action', name: 'action', width: '100px', orderable: false, searchable: false,},
    ]
		});
	});
</script>
@endpush
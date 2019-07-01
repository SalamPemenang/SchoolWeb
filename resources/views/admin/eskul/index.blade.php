@extends('layouts.admin-app')

@section('title')
	Ekstrakurikuler
@stop

@section('page-name')
	Ekstrakurikuler
@stop

@section('content')
	<a href="{{ route('eskul.tambah') }}" class="btn btn-info">Tambah Eskul</a><br><br>
	<table id="eskul">
		<thead>
			<tr>
				<th>#</th>
				<th>nama</th>
				<th>pembimbing</th>
				<th>jadwal</th>
				<th>action</th>
			</tr>
		</thead>
	</table>
@stop
@push('scripts')
	<script>
		$(function() {
			$('#eskul').DataTable({
				order: [[0, 'desc']],
				processing: true,
				responsive: true,
				serverSide: true,
				ajax: '{!! route('eskul.data') !!}',
				columns: [
				{data: 'id', name: 'id', width: '10px', orderable: true},
				{data: 'nama', name: 'nama', width: '20px', orderable: true},
				{data: 'pembimbing', name: 'pembimbing', width: '30px', orderable: true},
				{data: 'jadwal', name: 'jadwal', width: '20px', orderable: true},
				{data: 'action', name: 'action', width: '10px', orderable: false, searchable: false,},
				]
			});	
		});	
	</script>
@endpush
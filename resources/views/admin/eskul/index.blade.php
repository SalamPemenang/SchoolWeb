@extends('layouts.admin-app')

@section('title')
	Ekstrakurikuler
@stop

@section('page-name')
	Ekstrakurikuler
@stop

@section('content')
	<a href="{{ route('eskul.tambah') }}" class="btn btn-primary">Tambah Eskul</a><br><br>
	<table id="eskul">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Pembimbing</th>
				<th>Jadwal</th>
				<th>Action</th>
			</tr>
		</thead>
	</table>
@stop
@push('scripts')
	<script>
		$(function() {
			$('#eskul').DataTable({
				order: [[0, 'asc']],
				processing: true,
				responsive: true,
				serverSide: true,
				ajax: '{!! route('eskul.data') !!}',
				columns: [
				{data: 'DT_RowIndex', name: 'DT_RowIndex', width: '10px', orderable: true},
				{data: 'nama', name: 'nama', width: '20px', orderable: true},
				{data: 'pembimbing', name: 'pembimbing', width: '30px', orderable: true},
				{data: 'jadwal', name: 'jadwal', width: '20px', orderable: true},
				{data: 'action', name: 'action', width: '10px', orderable: false, searchable: false,},
				]
			});	
		});	
	</script>
@endpush
@extends('layouts.admin-app')

@section('title')
	Struktur Organisasi
@stop

@section('page-name')
	Struktur Organisasi
@stop

@section('content')
	<a href="{{ route('struktur.tambah') }}" class="btn btn-primary">Tambah</a>
	<br><br>
	<table id="struktur">
		<thead>
			<tr>
				<th>no</th>
				<th>foto</th>
				<th>action</th>
			</tr>
		</thead>
	</table>
@stop
@push('scripts')
	<script>
		$(function() {
			$('#struktur').DataTable({
				order: [[0, 'asc']],
				processing: true,
				responsive: true,
				serverSide: true,
				ajax: '{!! route('struktur.data') !!}',
				columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex', width: '10px', orderable: true},
                    {data: 'foto', name: 'foto', width:  '90px', orderable: true},
                    {data: 'action', name: 'action', width: '20px', orderable: false, searchable: false,},
				]
			});
		});
	</script>
@endpush	
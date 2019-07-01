@extends('layouts.admin-app')

@section('title')
Halaman Link
@stop

@section('content')
	<a href="{{ route('link.add') }}" class="btn btn-sm btn-primary">Tambah Data</a>
	<br><br>
	
	<table id="link">
		<thead>
			<tr role="row">
				<th class="text-center">NO</th>
				<th class="text-center">NAMA WEB</th>
				<th class="text-center">LINK</th>
				<th class="text-center">GAMBAR</th>
				<th class="text-center">ACTION</th>
			</tr>
		</thead>
	</table>
	
@stop

@push('scripts')
<script>
	$(function(){
		$('#link').DataTable({
		order: [[0, 'desc']],
    processing: true,
    responsive: true,
    serverSide: true,
    ajax: '{!! route('link.data') !!}',
    columns: [
    {data: 'DT_RowIndex', name: 'DT_RowIndex', width: '10px', orderable: true},
    {data: 'nama', name: 'nama', width: '50px', orderable: true},
    {data: 'link', name: 'link', width: '100px', orderable: true},
    {data: 'foto', name: 'foto', width: '50px', orderable: true},
    {data: 'action', name: 'action', width: '50px', orderable: false, searchable: false,},
    ]
		});
	});
</script>
@endpush
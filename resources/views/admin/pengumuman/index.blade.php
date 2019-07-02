@extends('layouts.admin-app')

@section('title')
Pengumuman
@stop

@section('content')
	<a href="{{route('pengumuman.tambah')}}" class="btn btn-primary">Tambah pengumuman</a><br><br>
	<table id="pengumuman">
		<thead>
			<tr role="row">
				<th>no</th>
				<th>judul</th>
				<th>foto</th>
				<th>tanggal</th>
				<th>deskripsi</th>
				<th>action</th>
			</tr>
		</thead>
	</table>
@stop
@push('scripts')
<script>
	$(function(){
		$('#pengumuman').DataTable({
		order: [[0, 'desc']],
    processing: true,
    responsive: true,
    serverSide: true,
    ajax: '{!! route('pengumuman.data') !!}',
    columns: [
    {data: 'DT_RowIndex', name: 'DT_RowIndex', width: '20px',},
    {data: 'judul', name: 'judul', width: '20px', orderable: true},
    {data: 'foto', name: 'foto', width: '20px', orderable: true},
    {data: 'tgl', name: 'nama', width: '50px', orderable: true},
    {data: 'deskripsi', name: 'deskripsi', width: '10px', orderable: true},
    {data: 'action', name: 'action', width: '100px', orderable: false, searchable: false,},
    ]
		});
	});
</script>
@endpush
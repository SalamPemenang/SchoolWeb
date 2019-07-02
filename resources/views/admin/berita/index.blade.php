@extends('layouts.admin-app')

@section('title')
Berita
@stop

@section('content')
	<a href="{{route('berita.tambah')}}" class="btn btn-primary">Tambah berita</a><br><br>
	<table id="berita">
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
		$('#berita').DataTable({
		order: [[0, 'desc']],
    processing: true,
    responsive: true,
    serverSide: true,
    ajax: '{!! route('berita.data') !!}',
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
@extends('layouts.admin-app')

@section('title')
Alumni
@stop

@section('content')
	<a href="{{route('alumni.tambah')}}" class="btn btn-primary">Tambah Alumni</a><br><br>
	<table id="alumni">
		<thead>
			<tr role="row">
				<th>no</th>
				<th>nama</th>
				<th>jenis kelamin</th>
				<th>tahun lulus</th>
				<th>foto</th>
				<th>pendidikan lanjutan</th>
				<th>action</th>
			</tr>
		</thead>
	</table>
@stop
@push('scripts')
<script>
	$(function(){
		$('#alumni').DataTable({
		order: [[0, 'desc']],
    processing: true,
    responsive: true,
    serverSide: true,
    ajax: '{!! route('alumni.data') !!}',
    columns: [
    {data: 'DT_RowIndex', name: 'DT_RowIndex', width: '20px',},
    {data: 'nama', name: 'nama', width: '50px', orderable: true},
    {data: 'jk', name: 'jk', width: '10px', orderable: true},
    {data: 'thn_lulus', name: 'thn_lulus', width: '100px', orderable: true},
    {data: 'foto', name: 'foto', width: '60px', orderable: true},
    {data: 'pendidikan_lanjutan', name: 'pendidikan_lanjutan', width: '100px', orderable: true,},
    {data: 'action', name: 'action', width: '100px', orderable: false, searchable: false,},
    ]
		});
	});
</script>
@endpush
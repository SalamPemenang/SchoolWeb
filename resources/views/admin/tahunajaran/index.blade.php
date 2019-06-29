@extends('layouts.admin-app')

@section('title')
Tahun Ajaran
@stop

@section('content')
	<a href="{{route('tahun.tambah')}}">Tambah tahun ajaran</a><br><br>
	<table id="tahunAjaran">
		<thead>
			<tr>
				<th>id</th>
				<th>tahun ajaran</th>
				<th>action</th>
			</tr>
		</thead>
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
    {data: 'action', name: 'action', width: '100px', orderable: false, searchable: false,},
    ]
		});
	});
</script>
@endpush
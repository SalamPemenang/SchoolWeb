@extends('layouts.admin-app')

@section('title')
Kelas
@stop

@section('content')
	<a href="{{route('kelas.tambah')}}" class="btn btn-primary">Tambah Kelas</a><br><br>
	<table id="kelas">
		<thead>
			<tr>
				<th>id</th>
				<th>kelas</th>
				<th>action</th>
			</tr>
		</thead>
		
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
    {data: 'id', name: 'id', width: '10px'},
    {data: 'kelas', name: 'kelas', width: '10px'},
    {data: 'action', name: 'action', width: '100px', orderable: false, searchable: false,},
    ]
		});
	});
</script>
@endpush
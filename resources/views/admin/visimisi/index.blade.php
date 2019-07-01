@extends('layouts.admin-app')

@section('title')
Visi Dan Misi
@stop

@section('page-name')
Visi dan Misi
@stop

@section('content')
<a href="{{ route('visimisi.tambah') }}" class="btn btn-primary">Tambah</a>
<table id="visimisi">
	<thead>
		<tr>
			<th>no</th>
			<th>visi</th>
            <th>misi</th>
            <th>action</th>
		</tr>
	</thead>
</table>
@stop
@push('scripts')
	<script>
		$(function() {
			$('#visimisi').DataTable({
				order: [[0, 'desc']],
				processing: true,
				responsive: true,
				serverSide: true,
				ajax: '{!! route('visimisi.data') !!}',
				columns: [
					{data: 'id', name: 'id', width: '15px', orderable: true},
					{data: 'visi', name: 'visi', width: '30px', orderable: true},
					{data: 'misi', name: 'misi', width: '30px', orderable: true},
					{data: 'action', name: 'action', width: '20px', orderable: false, searchable: false,},
				]
			});
		});
	</script>
@endpush
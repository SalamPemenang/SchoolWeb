@extends('layouts.admin-app')

@section('title')
Visi Dan Misi
@stop

@section('page-name')
Visi dan Misi
@stop

@section('content')
<a href="{{ route('visimisi.tambah') }}" class="btn btn-primary" title="Tambah Data">Tambah</a>
<br><br>
<table id="visimisi">
	<thead>
		<tr>
			<th>No</th>
			<th>Visi</th>
            <th>Misi</th>
            <th>Action</th>
		</tr>
	</thead>
</table>
@stop
@push('scripts')
	<script>
		$(function() {
			$('#visimisi').DataTable({
				order: [[0, 'asc']],
				processing: true,
				responsive: true,
				serverSide: true,
				ajax: '{!! route('visimisi.data') !!}',
				columns: [
					{data: 'DT_RowIndex', name: 'DT_RowIndex', width: '15px', orderable: true},
					{data: 'visi', name: 'visi', width: '30px', orderable: true},
					{data: 'misi', name: 'misi', width: '30px', orderable: true},
					{data: 'action', name: 'action', width: '20px', orderable: false, searchable: false,},
				]
			});
		});
	</script>
@endpush
@extends('layouts.admin-app')

@section('title')
	Profile Sekolah
@stop

@section('page-name')
	Profile Sekolah
@stop

@section('content')
	<a href="{{ route('profilesekolah.tambah') }}" class="btn btn-primary">Tambah</a>
	<br><br>
	<table id="profile" class="table table-responsive">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Sekolah</th>
				<th>NPSN</th>
				<th>Alamat</th>
				<th>No Telepon</th>
				<th>Tanggal Berdiri Sekolah</th>
				<th>Action</th>
			</tr>
		</thead>
	</table>
@stop
@push('scripts')
	<script>
		$(function() {
			$('#profile').DataTable({
				order: [[0, 'asc']],
				processing: true,
				responsive: true,
				serverSide: false,
				ajax: '{!! route('profilesekolah.data') !!}',
				columns: [
                     {data: 'DT_RowIndex', name: 'DT_RowIndex', width: '5px', orderable: true},
                     {data: 'nama', name: 'nama', width: '20px', orderable: true},
                     {data: 'npsn', name: 'npsn', width: '20px', orderable: true},
                     {data: 'alamat', name: 'alamat', width: '20px', orderable: true},
                     {data: 'no_hp', name: 'no_hp', width: '5px', orderable: true},
                     {data: 'tgl_pendirian', name: 'tgl_pendirian', width: '20px', orderable: true},
                     {data: 'action', name: 'action', width: '40px', orderable: false, searchable: false,},
				]
			})
		})
	</script>
@endpush
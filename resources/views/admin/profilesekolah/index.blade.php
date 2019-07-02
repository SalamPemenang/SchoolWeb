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
	<table id="profile_sekolah">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Sekolah</th>
				<th>NPSN</th>
				<th>Kode UN</th>
				<th>Nomor Induk Sekolah</th>
				<th>Website</th>
				<th>Email</th>
				<th>No SK Sekolah</th>
				<th>Tanggal Berdiri Sekolah</th>
				<th>Action</th>
			</tr>
		</thead>
	</table>
@stop
@push('scripts')
	<script>
		$(function() {
			$('#profile_sekolah').DataTable({
				order: [[0, 'asc']],
				processing: true,
				responsive: true,
				serverSide: true,
				ajax: '{!! route('profilesekolah.data') !!}',
				columns: [
                     {data: 'DT_RowIndex', name: 'DT_RowIndex', width: '15px', orderable: true},
                     {data: 'nama', name: 'nama', width: '20px', orderable: true},
                     {data: 'npsn', name: 'npsn', width: '20px', orderable: true},
                     {data: 'kode_un', name: 'kode_un', width: '20px', orderable: true},
                     {data: 'nis', name: 'nis', width: '20px', orderable: true},
                     {data: 'website', name: 'website', width: '20px', orderable: true},
                     {data: 'email', name: 'email', width: '20px', orderable: true},
                     {data: 'no_sk_pendirian_sekolah', name: 'no_sk_pendirian_sekolah', width: '20px', orderable: true},
                     {data: 'tgl_pendirian', name: 'tgl_pendirian', width: '20px', orderable: true},
                     {data: 'action', name: 'action', width: '20px', orderable: false, searchable: false,},
				]
			})
		})
	</script>
@endpush
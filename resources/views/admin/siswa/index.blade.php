@extends('layouts.admin-app')

@section('title')
Siswa
@stop

@section('content')
	<a href="{{route('siswa.tambah')}}" class="btn btn-primary">Tambah Siswa</a><br><br>
	<table id="siswa">
		<thead>
			<tr role="row">
				<th>no</th>
				<th>nisn</th>
				<th>nis</th>
				<th>nama</th>
				<th>jenis kelamin</th>
				<th>tanggal lahir</th>
				<th>tempat lahir</th>
				<th>foto</th>
				<th>id tahun ajaran</th>
				<th>id kelas</th>
				<th>action</th>
			</tr>
		</thead>
	</table>
@stop
@push('scripts')
<script>
	$(function(){
		$('#siswa').DataTable({
		order: [[0, 'desc']],
    processing: true,
    responsive: true,
    serverSide: true,
    ajax: '{!! route('siswa.data') !!}',
    columns: [
    {data: 'DT_RowIndex', name: 'DT_RowIndex', width: '20px',},
    {data: 'nisn', name: 'nisn', width: '20px', orderable: true},
    {data: 'nis', name: 'nis', width: '20px', orderable: true},
    {data: 'nama', name: 'nama', width: '50px', orderable: true},
    {data: 'jk', name: 'jk', width: '10px', orderable: true},
    {data: 'tgl_lahir', name: 'tgl_lahir', width: '100px', orderable: true},
    {data: 'tmpt_lahir', name: 'tmpt_lahir', width: '100px', orderable: true},
    {data: 'foto', name: 'foto', width: '60px', orderable: true},
    {data: 'id_tahun_ajaran', name: 'id_tahun_ajaran', width: '100px', orderable: true,},
    {data: 'id_kelas', name: 'id_kelas', width: '100px', orderable: true,},
    {data: 'action', name: 'action', width: '100px', orderable: false, searchable: false,},
    ]
		});
	});
</script>
@endpush
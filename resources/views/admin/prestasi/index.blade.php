@extends('layouts.admin-app')

@section('title')
Profile Prestasi
@stop

@section('content')
	<a href="{{ route('prestasi.add') }}" class="btn btn-sm btn-primary">Tambah Data</a>
	<br><br>

	<table id="prestasi">
		<thead>
			<tr role="row">
				<th class="text-center">NO</th>
				<th class="text-center">LOMBA</th>
				<th class="text-center">JUARA KE-</th>
				<th class="text-center">TINGKAT</th>
				<th class="text-center">PESERTA</th>
				<th class="text-center">ACTION</th>
			</tr>
		</thead>
	</table>

		
	
@stop

@push('scripts')
<script>
	$(function(){
		$('#prestasi').DataTable({
		order: [[0, 'desc']],
    processing: true,
    responsive: true,
    serverSide: true,
    ajax: '{!! route('prestasi.data') !!}',
    columns: [
    {data: 'id', name: 'id', width: '10px', orderable: true},
    {data: 'nama', name: 'nama', width: '100px', orderable: true},
    {data: 'juara_ke', name: 'juara_ke', width: '20px', orderable: true},
    {data: 'tingkat', name: 'tingkat', width: '20px', orderable: true},
    {data: 'peserta', name: 'peserta', width: '20px', orderable: true},
    {data: 'action', name: 'action', width: '50px', orderable: false, searchable: false,},
    ]
		});
	});
</script>
@endpush
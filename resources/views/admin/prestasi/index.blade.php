@extends('layouts.admin-app')

@section('title')
Profile Prestasi
@stop

@section('content')
	<a href="{{ route('prestasi.add') }}" class="btn btn-sm btn-primary">Tambah Data</a>
	<br><br>

	<table class="table table-bordered table-striped">
		<tr>
			<th class="text-center">NO</th>
			<th class="text-center">NAMA</th>
			<th class="text-center">JUARA KE-</th>
			<th class="text-center">TINGKAT</th>
			<th class="text-center">PESERTA</th>
			<th class="text-center" colspan="2">ACTION</th>
		</tr>

		@foreach( $prestations as $no => $prestasi )
		<tr>
			<td class="text-center">{{ $no + 1 }}</td>
			<td class="text-center">{{ $prestasi->nama }}</td>
			<td class="text-center">{{ $prestasi->juara_ke }}</td>
			<td class="text-center">{{ $prestasi->tingkat }}</td>
			<td class="text-center">{{ $prestasi->peserta }}</td>
			<td class="text-center">
				<a href="/prestasi/edit/{{ $prestasi->id }}" class="btn btn-sm btn-success">Ubah</a>
			</td>
			<td>
				<form action="/prestasi/delete/{{$prestasi->id}}" method="POST">
					@csrf
					<input type="submit" name="_method" value="Delete" class="btn btn-danger btn-sm">
				</form>
			</td>
		</tr>
		@endforeach
	</table>
@stop

@extends('layouts.admin-app')

@section('title')
Kelola Fasilitas
@stop

@section('content')
	<a href="{{ route('fasilitas.add') }}" class="btn btn-sm btn-primary">Tambah Data</a>
	<a href="{{ route('GF') }}" class="btn btn-sm btn-success">Tambah Kategori</a>
	<br><br>
	
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th class="text-center">NO</th>
						<th class="text-center">FOTO</th>
						<th class="text-center">KATEGORI</th>
						<th class="text-center">ACTION</th>
					</tr>
				</thead>

				<tbody>
					@foreach($fasilitations as $no => $fasilitas)
					<tr>
						<td>{{ $no + 1 }}.</td>
						<td>{{ $fasilitas->foto }}</td>
						<td class="text-center">{{ $fasilitas->id_category_fasilitas }}</td>
						<td class="text-center">
							<form action="{{ route('fasilitas.delete', $fasilitas->id) }}" method="post">
								@csrf
								<a href="{{ route('fasilitas.edit', $fasilitas->id) }}" class="btn btn-sm btn-success">Ubah</a> ||
								<span onclick="return confirm('Yakin');"><button class="btn btn-sm btn-danger">Hapus</button></span>
								<input type="hidden" name="_method" value="DELETE">
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>	
		</div>
	</div>
	<a href="{{ route('fasilitas') }}" class="btn btn-sm btn-danger">Kembali</a>
@stop

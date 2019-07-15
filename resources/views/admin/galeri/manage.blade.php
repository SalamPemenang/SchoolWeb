@extends('layouts.admin-app')

@section('title')
Kelola Galeri
@stop

@section('content')
	<a href="{{ route('galeri.add') }}" class="btn btn-sm btn-primary">Tambah Data</a>
	<a href="{{ route('GK') }}" class="btn btn-sm btn-success">Tambah Kategori</a>
	<br><br>
	
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th class="text-center">NO</th>
						<th class="text-center">FOTO</th>
						<th class="text-center">KATEGORI</th>
						<th class="text-center">LINK VIDEO</th>
						<th class="text-center">ACTION</th>
					</tr>
				</thead>

				<tbody>
					@foreach($galeries as $no => $galeri)
					<tr>
						<td>{{ $no + 1 }}.</td>
						<td>{{ $galeri->foto }}</td>
						<td class="text-center">{{ $galeri->id_category_galeri }}</td>
						<td>{{ $galeri->video }}</td>
						<td class="text-center">
							<form action="{{ route('galeri.delete', $galeri->id) }}" method="post">
								@csrf
								<a href="{{ route('galeri.edit', $galeri->id) }}" class="btn btn-sm btn-success">Ubah</a> ||
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
	<a href="{{ route('galeri') }}" class="btn btn-sm btn-danger">Kembali</a>
@stop

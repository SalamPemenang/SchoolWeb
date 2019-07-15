@extends('layouts.admin-app')

@section('title')
Halaman Kategori Galeri
@stop

@section('content')
	<a href="{{ route('GK.add') }}" class="btn btn-sm btn-primary">Tambah Data</a>
	<a href="{{ route('galeri') }}" class="btn btn-sm btn-danger">Kembali</a>
	<br><br>
	
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th class="text-center">NO</th>
						<th class="text-center">NAMA KATEGORI</th>
						<th class="text-center">ACTION</th>
					</tr>
				</thead>

				<tbody>
					@foreach($categories as $no => $category)
					<tr>
						<td>{{ $no + 1 }}.</td>
						<td>{{ $category->nama }}</td>
						<td class="text-center">
							<form action="{{ route('GK.delete', $category->id) }}" method="post">
								@csrf
								<a href="{{ route('GK.edit', $category->id) }}" class="btn btn-sm btn-success">Ubah</a> ||
								<span onclick="return confirm('Yakin')"><button class="btn btn-sm btn-danger">Hapus</button></span>
								<input type="hidden" name="_method" value="DELETE">
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>	
		</div>
	</div>
	
@stop
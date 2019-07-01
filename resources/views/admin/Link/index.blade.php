@extends('layouts.admin-app')

@section('title')
Halaman Link
@stop

@section('content')
	<a href="{{ route('link.add') }}" class="btn btn-sm btn-primary">Tambah Data</a>
	<br><br>
	
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th class="text-center">NO</th>
						<th class="text-center">LINK</th>
						<th class="text-center">GAMBAR</th>
						<th class="text-center" colspan="2">ACTION</th>
					</tr>
				</thead>

				<tbody>
				  @foreach( $links as $no => $link )
					<tr>
						<td>{{ $no + 1 }}.</td>
						<td><a href="{{ $link->nama }}" target="blank">{{ $link->nama }}</a></td>
						<td><img src="{{ asset('/image/link/'.$link->foto) }}" alt="link.jpg" width="150" height="40"></td>
						<td>
							<form action="{{ route('link.delete', $link->id) }}" method="post">
								@csrf
								<a href="{{ route('link.edit', $link->id) }}" class="btn btn-sm btn-success">Ubah</a> ||
								<span onclick="return confirm('Yakin');"><button class="btn btn-sm btn-danger">Delete</button></span>
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


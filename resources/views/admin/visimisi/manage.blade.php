@extends('layouts.admin-app')

@section('title')
	Manage Data Visi dan Misi
@stop

@section('page-name')
	Manage Visi dan Misi
@stop

@section('content')
	<div class="table-responsive">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th class="text-center">No</th>
					<th class="text-center">Visi</th>
					<th class="text-center">Misi</th>
					<th class="text-center" colspan="2">Action</th>
				</tr>
				<?php $no = 1; ?>
				@foreach($visimisi as $vs)
				<tbody>
					<tr>
						<td>{{ $no++ }}</td>
						<td>{{ $vs->visi }}</td>
						<td>{{ $vs->misi }}</td>
						<td>
							<a href="/visimisi/{{ $vs->id }}/edit" class="btn btn-success">
								<i class="fa fa-pencil"></i>
							</a>
						</td>
						<td>
							<form action="/visimisi/{{ $vs->id }}" method="POST">
								{{ csrf_field() }}
								{{ method_field('DELETE') }}
								<button type="submit" class="btn btn-danger" value="delete" onclick="return confirm('Apakah Yakin Ingin Dihapus?')">
									<i class="fa fa-trash"></i>
								</button>
							</form>
						</td>
					</tr>
				</tbody>
				@endforeach
			</thead>
		</table>
	</div>
@stop
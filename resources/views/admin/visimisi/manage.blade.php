@extends('layouts.admin-app')

@section('title')
	Manage Data Visi dan Misi
@endsection

@section('page-name')
	Manage Visi dan Misi
@endsection

@section('content')
	<div class="table-responsive">
		<table class="table table-bordered" style="display: block;">
			<thead>
				<tr>
					<th>No</th>
					<th>Visi</th>
					<th>Misi</th>
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
							<form action="/visimisi/{{ $vs->id }}" method="POST">
								{{ csrf_field() }}
								{{ method_field('DELETE') }}
								<button type="submit" class="btn btn-danger" value="delete">
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
@endsection
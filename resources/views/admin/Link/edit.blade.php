@extends('layouts.admin-app')

@section('title')
Halaman Link
@stop

@section('content')

	<br><br>
	
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<h4>Silahkan Masukan Link yang Baru</h4>
			<form action="{{ route('link.update', $link->id) }}" method="POST">
				@csrf

				<div class="form-group">
					<input type="text" name="link" class="form-control" required="" maxlength="190" value="{{ $link->nama }}">
				</div>

				<div class="form-group">
					<button class="btn btn-primary form-control" type="submit">Submit</button>
				</div>
			</form>
		</div>
	</div>
@stop

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tahun Ajaran</title>
	<link rel="stylesheet" href="{{asset('css/jquery.dataTables.min.css')}}">
	<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
</head>
<body>

	<table id="tahunAjar">
		<tr>
			<thead>
				<th>id</th>
				<th>Tahun Ajaran</th>
				<th>Created at</th>
				<th>Updated at</th>
			</thead>
		</tr>
	</table>
	
</body>
</html>
<script>
	$(function(){
		$('#tahunAjar').DataTable({
			order: [[0, 'desc']],
			processing: true,
			responsive: true,
			serverSide: true,
			ajax: '{!! route('tahunajar.data') !!}',
			columns: [
				{data: 'id', name: 'id', width: '15px'},
				{data: 'tahun_ajaran', name: 'tahun_ajaran'},
				{data: 'created_at', name: 'created_at'},
				{data: 'updated_at', name: 'updated_at'},
				{data: 'action', name: 'action', width: '100px', orderable: false, searchable: false,},
			]
		});
	});
</script>
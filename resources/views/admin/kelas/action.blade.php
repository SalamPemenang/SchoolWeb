<form action="{{route('kelas.delete', $id)}}" method="post">
	@csrf
	<a href="{{route('kelas.edit', $id)}}" class="btn btn-sm btn-success">Ubah</a> ||
	<span onclick="return confirm('Yakin');"><button class="btn btn-sm btn-danger">Delete</button></span>
	<input type="hidden" name="_method" value="DELETE">
</form>
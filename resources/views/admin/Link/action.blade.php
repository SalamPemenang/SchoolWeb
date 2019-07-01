<form action="{{route('link.delete', $id)}}" method="post">
	@csrf
	<a href="{{route('link.edit', $id)}}" class="btn btn-sm btn-success">Ubah</a> ||
	<span onclick="return confirm('Yakin');"><button class="btn btn-sm btn-danger">Hapus</button></span>
	<input type="hidden" name="_method" value="DELETE">
</form>
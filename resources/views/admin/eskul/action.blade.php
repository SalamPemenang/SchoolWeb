<form action="{{ route('eskul.hapus', $id) }}" method="post">
	@csrf
	<a href="{{ route('eskul.edit', $id) }}" class="btn btn-success btn-sm">Ubah</a> ||
	<span onclick="return confirm('Yakin');">
		<button class="btn btn-sm btn-danger">Delete</button>
	</span>
	<input type="hidden" name="_method" value="DELETE">
</form>
<form action="{{ route('profilesekolah.hapus', $id) }}" method="post">
	@csrf
	<a href="{{ route('profilesekolah.edit', $id) }}" class="btn btn-success">Ubah</a> ||
	<span onclick="return confirm('Yakin?')">
		<button class="btn btn-danger">Hapus</button>
	</span>
	<input type="hidden" name="_method" value="DELETE">
</form>
<form action="{{ route('visimisi.hapus', $id) }}" method="post">
	@csrf
	<a href="{{ route('visimisi.edit', $id) }}">Ubah</a> ||
	<span onclick="return confirm('Yakin?')">
		<button class="btn btn-danger">Hapus</button>
	</span>
	<input type="hidden" name="_method" value="DELETE">
</form>
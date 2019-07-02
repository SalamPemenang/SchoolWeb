<form action="{{ route('struktur.hapus', $id) }}" method="post">
	@csrf
	<a href="{{ route('struktur.lihat', $id) }}" class="btn btn-warning">Lihat</a> ||
	<a href="{{ route('struktur.update', $id) }}" class="btn btn-success">Ubah</a> ||
	<span onclick="return confirm('Yain?')">
		<button class="btn btn-danger">Hapus</button>
	</span>
	<input type="hidden" name="_method" value="DELETE">
</form>
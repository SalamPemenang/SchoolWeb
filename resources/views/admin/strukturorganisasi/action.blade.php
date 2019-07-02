<form action="{{ route('struktur.hapus', $id) }}" method="post" title="Hapus Data">
	@csrf
	<a href="{{ route('struktur.lihat', $id) }}" class="btn btn-warning" title="Lihat Data">
		<i class="fa fa-eye"></i>
	</a> ||
	<a href="{{ route('struktur.edit', $id) }}" class="btn btn-success" title="Ubah Data">
		<i class="fa fa-pencil"></i>
	</a> ||
	<span onclick="return confirm('Yakin?')">
		<button class="btn btn-danger">
			<i class="fa fa-trash"></i>
		</button>
	</span>
	<input type="hidden" name="_method" value="DELETE">
</form>
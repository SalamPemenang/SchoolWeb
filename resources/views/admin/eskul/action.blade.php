<form action="{{ route('eskul.hapus', $id) }}" method="post">
	@csrf
	<a href="{{ route('eskul.edit', $id) }}" class="btn btn-success" title="Ubah Data">
		<i class="fa fa-pencil"></i>
	</a> ||
	<span onclick="return confirm('Yakin');">
		<button class="btn btn-danger" title="Hapus Data">
			<i class="fa fa-trash"></i>
		</button>
	</span>
	<input type="hidden" name="_method" value="DELETE">
</form>
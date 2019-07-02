<form action="{{ route('profilesekolah.hapus', $id) }}" method="post">
	@csrf
	<a href="{{ route('profilesekolah.edit', $id) }}" class="btn btn-sm btn-success">
		<i class="fa fa-pencil"></i>
	</a> ||
	<span onclick="return confirm('Yakin?')">
		<button class="btn btn-danger btn-sm">
			<i class="fa fa-trash"></i>
		</button>
	</span>
	<input type="hidden" name="_method" value="DELETE">
</form>
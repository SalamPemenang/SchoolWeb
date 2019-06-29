<form action="{{route('tahun.delete', $id)}}" method="post">
	@csrf
	<a href="{{route('tahun.edit', $id)}}">Ubah</a>
	<span onclick="return confirm('Yakin');"><button>Delete</button></span>
	<input type="hidden" name="_method" value="DELETE">
</form>
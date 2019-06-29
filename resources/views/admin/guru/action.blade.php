<form action="{{route('guru.delete', $id)}}" method="post">
	@csrf
	<a href="{{route('guru.edit', $id)}}">Ubah</a>
	<span onclick="return confirm('Yakin');"><button>Delete</button></span>
	<input type="hidden" name="_method" value="DELETE">
</form>
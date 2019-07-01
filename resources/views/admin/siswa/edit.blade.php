@extends('layouts.admin-app')

@section('title')
Edit Siswa
@stop

@section('content')
<form action="{{route('siswa.post')}}" method="post" enctype="multipart/form-data">
	@csrf
	<input type="hidden" name="id" value="{{$siswa->id}}">
	<div class="form-group">
		<label for="nisn">NISN *</label>
		<input type="text" name="nisn" id="nisn" class="form-control" autocomplete="off" required="" maxlength="20" value="{{$siswa->nisn}}">
	</div>
	
	<div class="form-group">
		<label for="nis">NIS *</label>
		<input type="text" name="nis" id="nis" class="form-control" autocomplete="off" required="" maxlength="20" value="{{$siswa->nis}}">
	</div>
	
	<div class="form-group">
		<label for="nama">Nama *</label>
		<input type="text" name="nama" id="nama" class="form-control" autocomplete="off" required="" maxlength="50" value="{{$siswa->nama}}">
	</div>

	<div class="form-group">
		<label for="jk">Jenis Kelamin *</label>
		<input type="radio" name="jk" id="jk" value="L">L
		<input type="radio" name="jk" id="jk" value="P">P
	</div>

	<div class="form-group">
		<label for="tgl_lahir">Tanggal Lahir *</label>
		<input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" autocomplete="off" required="" value="{{$siswa->tgl_lahir}}">
	</div>

	<div class="form-group">
		<label for="tmpt_lahir">Tempat Lahir</label>
		<input type="text" name="tmpt_lahir" id="tmpt_lahir" class="form-control" autocomplete="off" required="" value="{{$siswa->tmpt_lahir}}">
	</div>

	<div class="form-group">
		<label for="foto">Foto *</label>
		<input type="file" name="foto" id="foto" required="">
		<label>{{$siswa->foto}}</label>
	</div>	

	<div class="form-group">
		<label for="id_tahun_ajaran">Tahun Ajaran *</label>
		<select name="id_tahun_ajaran" id="id_tahun_ajaran" class="form-control" required="">
			<option value="">-Pilih Kategori-</option>
				@foreach($tahunajaran as $key)
					<option value="{{$key->id}}">{{$key->tahun_ajaran}}</option>
				@endforeach	
		</select>		
	</div>

	<div class="form-group">
		<label for="id_kelas">Kelas *</label>
		<select name="id_kelas" id="id_kelas" class="form-control" required="">
			<option value="">-Pilih Kategori-</option>
				@foreach($kelas as $key)
					<option value="{{$key->id}}">{{$key->kelas}}</option>
				@endforeach	
		</select>	
	</div>

	<div class="form-group">
		<button>Simpan</button>
	</div>
</form>
@stop
<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Eskul;
use App\Berita;

Route::get('/', function (){
	$pengumuman = DB::table('pengumuman')
						->orderBy('tgl', 'desc')
						->get();
	$b = DB::table('berita')
						->orderBy('tgl', 'desc')
						->get();
	$Eskul = Eskul::all();
    return view('welcome', ['Eskul' => $Eskul, 'pengumuman' => $pengumuman, 'b' => $b]);
});






Route::get('/login-WithCaptcha', 'CaptchaController@create')->name('logCapt');
Route::post('captcha', 'CaptchaController@captchaValidate');
Route::get('refreshcaptcha', 'CaptchaController@refreshCaptcha');

//Verify true untuk memastikan verifikasi benar
Auth::routes(['verify' => true]);

//middleware verified halaman yang dimana user harus verifikasi gmail
Route::get('/home', 'HomeController@index')->name('home');

//Halaman Admin : Tahun Ajaran 
Route::prefix('tahun-ajaran')->group(function(){
	Route::get('/', 'Admin\TahunAjaranController@index')->name('tahunajaran');
	// Datatable Tahun Ajaran
	Route::get('/data', 'Admin\TahunAjaranController@tahunDatatables')->name('tahun.data');
	// Tambah Data Tahun Ajaran
	Route::get('/tambah', 'Admin\TahunAjaranController@create')->name('tahun.tambah');
	// Post Tambah & Ubah Tahun Ajaran
	Route::post('/post', 'Admin\TahunAjaranController@store')->name('tahun.post');
	// Edit Tahun Ajaran
	Route::get('/{id}/edit', 'Admin\TahunAjaranController@edit')->name('tahun.edit');
	// Hapus Tahun Ajaran
	Route::delete('/{id}/hapus', 'Admin\TahunAjaranController@destroy')->name('tahun.delete');
});


// Halaman Admin : Kelas
Route::prefix('kelas')->group(function(){
	Route::get('/', 'Admin\KelasController@index')->name('kelas');
	// Datatable Kelas
	Route::get('/data', 'Admin\KelasController@KelasDatatables')->name('kelas.data');
	// Tambah Kelas
	Route::get('/tambah', 'Admin\KelasController@create')->name('kelas.tambah');
	// Post Tambah & Ubah Kelas
	Route::post('/post', 'Admin\KelasController@store')->name('kelas.post');
	// Edit Kelas
	Route::get('/{id}/edit', 'Admin\KelasController@edit')->name('kelas.edit');
	// Hapus Kelas
	Route::delete('/{id}/hapus', 'Admin\KelasController@destroy')->name('kelas.delete');
});

// Halaman Admin: Siswa
Route::prefix('siswa')->group(function(){
	Route::get('/', 'Admin\SiswaController@index')->name('siswa');
	Route::get('/data', 'Admin\SiswaController@siswaDatatables')->name('siswa.data');
	Route::get('/tambah', 'Admin\SiswaController@create')->name('siswa.tambah');
	Route::post('/post', 'Admin\SiswaController@store')->name('siswa.post');
	Route::get('/{id}/edit', 'Admin\SiswaController@edit')->name('siswa.edit');
	Route::delete('/{id}/hapus', 'Admin\SiswaController@destroy')->name('siswa.delete');
});


// Halaman Admin : Guru
Route::prefix('guru')->group(function(){
	Route::get('/', 'Admin\GuruController@index')->name('guru');
	// Datatable
	Route::get('/data', 'Admin\GuruController@guruDatatables')->name('guru.data');
	// Tambah Guru
	Route::get('/tambah', 'Admin\GuruController@create')->name('guru.tambah');
	// Post Tambah & Ubah Guru
	Route::post('/post', 'Admin\GuruController@store')->name('guru.post');
	// Edit Guru
	Route::get('/{id}/edit', 'Admin\GuruController@edit')->name('guru.edit');
	// Hapus Guru
	Route::delete('/{id}/hapus', 'Admin\GuruController@destroy')->name('guru.delete');
});

// Halaman Admin: Alumni
Route::prefix('alumni')->group(function(){
	Route::get('/', 'Admin\AlumniController@index')->name('alumni');
	// Datatable
	Route::get('/data', 'Admin\AlumniController@alumniDatatables')->name('alumni.data');
	// Tambah Alumni
	Route::get('/tambah', 'Admin\AlumniController@create')->name('alumni.tambah');
	// Post Tambah & Ubah Alumni
	Route::post('/post', 'Admin\AlumniController@store')->name('alumni.post');
	// Edit Alumni
	Route::get('/{id}/edit', 'Admin\AlumniController@edit')->name('alumni.edit');
	// Hapus Alumni
	Route::delete('/{id}/hapus', 'Admin\AlumniController@destroy')->name('alumni.delete');
});


//Halaman Admin : Prestaasi
Route::prefix('prestasi')->group( function() {
	Route::get('/', 'Admin\Prestasicontroller@index')->name('prestasi');
	// DataTable
	Route::get('/data', 'Admin\Prestasicontroller@prestasiDatatable')->name('prestasi.data');
	// Tambah Data
	Route::get('/tambah', 'Admin\Prestasicontroller@create')->name('prestasi.add');
	Route::post('/post', 'Admin\Prestasicontroller@store')->name('add.post');
	// Ubah Data
	Route::get('/edit/{id}', 'Admin\Prestasicontroller@edit')->name('prestasi.edit');
	Route::post('/post/{id}', 'Admin\Prestasicontroller@update')->name('edit.post');
	// Hapus Data
	Route::delete('delete/{id}', 'Admin\PrestasiController@destroy')->name('prestasi.delete');
});


// Halaman Admin : Link
Route::prefix('link')->group( function() {{
	Route::get('/', 'Admin\LinkController@index')->name('link');
	// DataTable
	Route::get('/data', 'Admin\LinkController@linkDatatable')->name('link.data');
	// Tambah Data
	Route::get('/tambah', 'Admin\LinkController@create')->name('link.add');
	Route::post('/post', 'Admin\LinkController@store')->name('link.store');
	// Ubah Data
	Route::get('/edit/{id}', 'Admin\LinkController@edit')->name('link.edit');
	Route::post('/post/{id}', 'Admin\LinkController@update')->name('link.update');
	// Hapus Data
	Route::delete('delete/{id}', 'Admin\LinkController@destroy')->name('link.delete');
}});


// Halaman Admin : Fasilitas
Route::prefix('fasilitas')->group( function() {{
	Route::get('/', 'Admin\FasilitasController@index')->name('fasilitas');
	// Manage Data
	Route::get('/manage', 'Admin\FasilitasController@manage')->name('fasilitas.manage');
	// Tambah Data
	Route::get('/tambah', 'Admin\FasilitasController@create')->name('fasilitas.add');
	Route::post('/post', 'Admin\FasilitasController@store')->name('fasilitas.store');
	// Ubah Data
	Route::get('/edit/{id}', 'Admin\FasilitasController@edit')->name('fasilitas.edit');
	Route::post('/post/{id}', 'Admin\FasilitasController@update')->name('fasilitas.update');
	// Hapus Data
	Route::delete('delete/{id}', 'Admin\FasilitasController@destroy')->name('fasilitas.delete')->middleware('verified');

	// Route KategoriFasilitas
	Route::get('/kategori', 'Admin\CategoryFasilitasController@index')->name('GF')->middleware('verified');
	// Tambah Data
	Route::get('/kategori/tambah', 'Admin\CategoryFasilitasController@create')->name('GF.add')->middleware('verified');
	Route::post('/kategori/post', 'Admin\CategoryFasilitasController@store')->name('GF.store')->middleware('verified');
	// Ubah Data
	Route::get('/kategori/edit/{id}', 'Admin\CategoryFasilitasController@edit')->name('GF.edit')->middleware('verified');
	Route::post('/kategori/post/{id}', 'Admin\CategoryFasilitasController@update')->name('GF.update')->middleware('verified');
	// Hapus Data
	Route::delete('kategori/delete/{id}', 'Admin\CategoryFasilitasController@destroy')->name('GF.delete')->middleware('verified');
}});



// Halaman Admin : Galleri
Route::prefix('galeri')->group( function() {{
	Route::get('/', 'Admin\GaleriController@index')->name('galeri');
	// Manage Data
	Route::get('/manage', 'Admin\GaleriController@manage')->name('galeri.manage');
	// Tambah Data
	Route::get('/tambah', 'Admin\GaleriController@create')->name('galeri.add');
	Route::post('/post', 'Admin\GaleriController@store')->name('galeri.store');
	// Ubah Data
	Route::get('/edit/{id}', 'Admin\GaleriController@edit')->name('galeri.edit');
	Route::post('/post/{id}', 'Admin\GaleriController@update')->name('galeri.update');
	// Hapus Data
	Route::delete('delete/{id}', 'Admin\GaleriController@destroy')->name('galeri.delete')->middleware('verified');
}});


//Profile Sekolah di halaman admin url diganti jadi tentangsekolah
//Halaman Admin : Profile Sekolah
Route::prefix('tentangsekolah')->group(function() {
	Route::get('/', 'Admin\ProfileSekolahController@index')->name('profilesekolah');
	//Datatables
	Route::get('/data', 'Admin\ProfileSekolahController@profileDatatables')->name('profilesekolah.data');
	//Tambah Data
	Route::get('/tambah', 'Admin\ProfileSekolahController@create')->name('profilesekolah.tambah');
	Route::post('/add', 'Admin\ProfileSekolahController@store')->name('profilesekolah.add');
	//Lihat Data
	Route::get('/lihat/{id}', 'Admin\ProfileSekolahController@show')->name('profilesekolah.lihat');
	//ubah Profile 
	Route::get('/{id}/edit', 'Admin\ProfileSekolahController@edit')->name('profilesekolah.edit');
	Route::post('/{id}', 'Admin\ProfileSekolahController@update')->name('profilesekolah.post');
	//Hapus Data
	Route::delete('/{id}', 'Admin\ProfileSekolahController@destroy')->name('profilesekolah.hapus');
});

//Halaman Admin : Visi dan Misi
Route::prefix('visimisi')->group(function() { 
	Route::get('/', 'Admin\VisiMisiController@index')->name('visimisi');
	//Datatable 
	Route::get('/data', 'Admin\VisiMisiController@visimisiDatatables')->name('visimisi.data');
	//tambah data 
	Route::get('/tambah', 'Admin\VisiMisiController@create')->name('visimisi.tambah');
	Route::post('/post', 'Admin\VisiMisiController@store')->name('visimisi.add');
	//ubah data 
	Route::get('/{id}/edit', 'Admin\VisiMisiController@edit')->name('visimisi.edit');
	Route::post('/{id}', 'Admin\VisiMisiController@update')->name('visimisi.post');
	//hapus data 
	Route::delete('/{id}', 'Admin\VisiMisiController@destroy')->name('visimisi.hapus');
});


//Halaman Admin : Eskul
Route::prefix('eskul')->group( function() {
	Route::get('/', 'Admin\EskulController@index')->name('eskul');
	//Datatable 
	Route::get('/data', 'Admin\EskulController@eskulDatatables')->name('eskul.data');
	//tambah data 
	Route::get('/tambah', 'Admin\EskulController@create')->name('eskul.tambah');
	Route::post('/post', 'Admin\EskulController@store')->name('eskul.post');
	//ubah data 
	Route::get('/edit/{id}', 'Admin\EskulController@edit')->name('eskul.edit');
	Route::post('/{id}', 'Admin\EskulController@update')->name('eskul.update');
	//delete data 
	Route::delete('/{id}', 'Admin\EskulController@destroy')->name('eskul.hapus');
});

//Halaman Admin : Struktur Organisasi
Route::prefix('struktur-organisasi')->group( function() {
	Route::get('/', 'Admin\StrukturOrganisasiController@index')->name('struktur');
	//Datatable 
	Route::get('/data', 'Admin\StrukturOrganisasiController@strukturDatatable')->name('struktur.data');
	//tambah data 
	Route::get('/tambah', 'Admin\StrukturOrganisasiController@create')->name('struktur.tambah');
	Route::post('/post', 'Admin\StrukturOrganisasiController@store')->name('struktur.post');
	//Lihat data 
	Route::get('/lihat/{id}', 'Admin\StrukturOrganisasiController@show')->name('struktur.lihat');
	//ubah data
	Route::get('/edit/{id}', 'Admin\StrukturOrganisasiController@edit')->name('struktur.edit');
	Route::post('/{id}', 'Admin\StrukturOrganisasiController@update')->name('struktur.update');
	//Hapus Data 
	Route::delete('/{id}', 'Admin\StrukturOrganisasiController@destroy')->name('struktur.hapus');
});

// Halaman Admin: pengumuman
Route::prefix('pengumuman')->group(function(){
	Route::get('/', 'Admin\pengumumanController@index')->name('pengumuman');
	Route::get('/data', 'Admin\pengumumanController@pengumumanDatatables')->name('pengumuman.data');
	Route::get('/tambah', 'Admin\pengumumanController@create')->name('pengumuman.tambah');
	Route::post('/post', 'Admin\pengumumanController@store')->name('pengumuman.post');
	Route::get('/{id}/edit', 'Admin\pengumumanController@edit')->name('pengumuman.edit');
	Route::delete('/{id}/hapus', 'Admin\pengumumanController@destroy')->name('pengumuman.delete');
});

// Halaman Admin: berita
Route::prefix('berita')->group(function(){
	Route::get('/', 'Admin\beritaController@index')->name('berita');
	Route::get('/data', 'Admin\beritaController@beritaDatatables')->name('berita.data');
	Route::get('/tambah', 'Admin\beritaController@create')->name('berita.tambah');
	Route::post('/post', 'Admin\beritaController@store')->name('berita.post');
	Route::get('/{id}/edit', 'Admin\beritaController@edit')->name('berita.edit');
	Route::delete('/{id}/hapus', 'Admin\beritaController@destroy')->name('berita.delete');
});
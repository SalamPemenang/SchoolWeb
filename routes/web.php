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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login-WithCaptcha', 'CaptchaController@create')->name('logCapt');
Route::post('captcha', 'CaptchaController@captchaValidate');
Route::get('refreshcaptcha', 'CaptchaController@refreshCaptcha');

//Verify true untuk memastikan verifikasi benar
Auth::routes(['verify' => true]);

//middleware verified halaman yang dimana user harus verifikasi gmail
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

//Halaman Admin : Tahun Ajaran 
Route::prefix('tahun-ajaran')->group(function(){
	Route::get('/', 'Admin\TahunAjaranController@index')->name('tahunajaran')->middleware('verified');
	// Datatable Tahun Ajaran
	Route::get('/data', 'Admin\TahunAjaranController@tahunDatatables')->name('tahun.data')->middleware('verified');
	// Tambah Data Tahun Ajaran
	Route::get('/tambah', 'Admin\TahunAjaranController@create')->name('tahun.tambah')->middleware('verified');
	// Post Tambah & Ubah Tahun Ajaran
	Route::post('/post', 'Admin\TahunAjaranController@store')->name('tahun.post')->middleware('verified');
	// Edit Tahun Ajaran
	Route::get('/{id}/edit', 'Admin\TahunAjaranController@edit')->name('tahun.edit')->middleware('verified');
	// Hapus Tahun Ajaran->middleware('verified')
	Route::delete('/{id}/hapus', 'Admin\TahunAjaranController@destroy')->name('tahun.delete')->middleware('verified');
});


// Halaman Admin : Kelas
Route::prefix('kelas')->group(function(){
	Route::get('/', 'Admin\KelasController@index')->name('kelas')->middleware('verified');
	// Datatable Kelas
	Route::get('/data', 'Admin\KelasController@KelasDatatables')->name('kelas.data')->middleware('verified');
	// Tambah Kelas
	Route::get('/tambah', 'Admin\KelasController@create')->name('kelas.tambah')->middleware('verified');
	// Post Tambah & Ubah Kelas
	Route::post('/post', 'Admin\KelasController@store')->name('kelas.post')->middleware('verified');
	// Edit Kelas
	Route::get('/{id}/edit', 'Admin\KelasController@edit')->name('kelas.edit')->middleware('verified');
	// Hapus Kelas
	Route::delete('/{id}/hapus', 'Admin\KelasController@destroy')->name('kelas.delete')->middleware('verified');
});

// Halaman Admin: Siswa
Route::prefix('siswa')->group(function(){
	Route::get('/', 'Admin\SiswaController@index')->name('siswa')->middleware('verified');
	Route::get('/data', 'Admin\SiswaController@siswaDatatables')->name('siswa.data')->middleware('verified');
	Route::get('/tambah', 'Admin\SiswaController@create')->name('siswa.tambah')->middleware('verified');
	Route::post('/post', 'Admin\SiswaController@store')->name('siswa.post')->middleware('verified');
	Route::get('/{id}/edit', 'Admin\SiswaController@edit')->name('siswa.edit')->middleware('verified');
	Route::delete('/{id}/hapus', 'Admin\SiswaController@destroy')->name('siswa.delete')->middleware('verified');
});


// Halaman Admin : Guru
Route::prefix('guru')->group(function(){
	Route::get('/', 'Admin\GuruController@index')->name('guru')->middleware('verified');
	// Datatable
	Route::get('/data', 'Admin\GuruController@guruDatatables')->name('guru.data')->middleware('verified');
	// Tambah Guru
	Route::get('/tambah', 'Admin\GuruController@create')->name('guru.tambah')->middleware('verified');
	// Post Tambah & Ubah Guru
	Route::post('/post', 'Admin\GuruController@store')->name('guru.post')->middleware('verified');
	// Edit Guru
	Route::get('/{id}/edit', 'Admin\GuruController@edit')->name('guru.edit')->middleware('verified');
	// Hapus Guru
	Route::delete('/{id}/hapus', 'Admin\GuruController@destroy')->name('guru.delete')->middleware('verified');
});

// Halaman Admin: Alumni
Route::prefix('alumni')->group(function(){
	Route::get('/', 'Admin\AlumniController@index')->name('alumni')->middleware('verified');
	// Datatable
	Route::get('/data', 'Admin\AlumniController@alumniDatatables')->name('alumni.data')->middleware('verified');
	// Tambah Alumni
	Route::get('/tambah', 'Admin\AlumniController@create')->name('alumni.tambah')->middleware('verified');
	// Post Tambah & Ubah Alumni
	Route::post('/post', 'Admin\AlumniController@store')->name('alumni.post')->middleware('verified');
	// Edit Alumni
	Route::get('/{id}/edit', 'Admin\AlumniController@edit')->name('alumni.edit')->middleware('verified');
	// Hapus Alumni
	Route::delete('/{id}/hapus', 'Admin\AlumniController@destroy')->name('alumni.delete')->middleware('verified');
});


//Halaman Admin : Prestaasi
Route::prefix('prestasi')->group( function() {
	Route::get('/', 'Admin\Prestasicontroller@index')->name('prestasi')->middleware('verified');
	// DataTable
	Route::get('/data', 'Admin\Prestasicontroller@prestasiDatatable')->name('prestasi.data')->middleware('verified');
	// Tambah Data
	Route::get('/tambah', 'Admin\Prestasicontroller@create')->name('prestasi.add')->middleware('verified');
	Route::post('/post', 'Admin\Prestasicontroller@store')->name('add.post')->middleware('verified');
	// Ubah Data
	Route::get('/edit/{id}', 'Admin\Prestasicontroller@edit')->name('prestasi.edit')->middleware('verified');
	Route::post('/post/{id}', 'Admin\Prestasicontroller@update')->name('edit.post')->middleware('verified');
	// Hapus Data
	Route::delete('delete/{id}', 'Admin\PrestasiController@destroy')->name('prestasi.delete')->middleware('verified');
});


// Halaman Admin : Link
Route::prefix('link')->group( function() {{
	Route::get('/', 'Admin\LinkController@index')->name('link')->middleware('verified');
	// DataTable
	Route::get('/data', 'Admin\LinkController@linkDatatable')->name('link.data')->middleware('verified');
	// Tambah Data
	Route::get('/tambah', 'Admin\LinkController@create')->name('link.add')->middleware('verified');
	Route::post('/post', 'Admin\LinkController@store')->name('link.store')->middleware('verified');
	// Ubah Data
	Route::get('/edit/{id}', 'Admin\LinkController@edit')->name('link.edit')->middleware('verified');
	Route::post('/post/{id}', 'Admin\LinkController@update')->name('link.update')->middleware('verified');
	// Hapus Data
	Route::delete('delete/{id}', 'Admin\LinkController@destroy')->name('link.delete')->middleware('verified');
}});


//Profile Sekolah di halaman admin
Route::prefix('profilesekolah')->group(function() {
	Route::get('/', 'Admin\ProfileSekolahController@index')->name('profilesekolah')->middleware('verified');
	//ubah Profile 
	Route::get('/{id}/edit', 'Admin\ProfileSekolahController@edit')->name('profilesekolah.edit')->middleware('verified');
	Route::put('/{id}', 'Admin\ProfileSekolahController@update')->name('profilesekolah.post')->middleware('verified');
});

//Visi dan Misi di halaman Admin
Route::prefix('visimisi')->group(function() { 
	Route::get('/', 'Admin\VisiMisiController@index')->name('visimisi')->middleware('verified');
	//Datatable Visi dan Misi
	Route::get('/data', 'Admin\VisiMisiController@visimisiDatatables')->name('visimisi.data')->middleware('verified');
	//kelola data visi dan misi
	Route::get('/manage', 'Admin\VisiMisiController@manage')->name('visimisi.manage')->middleware('verified');
	//tambah data visi dan misi
	Route::get('/tambah', 'Admin\VisiMisiController@create')->name('visimisi.tambah')->middleware('verified');
	Route::post('/post', 'Admin\VisiMisiController@store')->name('visimisi.add');
	//ubah data visi dan misi
	Route::get('/{id}/edit', 'Admin\VisiMisiController@edit')->name('visimisi.edit')->middleware('verified');
	Route::put('/{id}', 'Admin\VisiMisiController@update')->name('visimisi.post');
	//hapus data visi dan misi
	Route::delete('/{id}', 'Admin\VisiMisiController@destroy')->name('visimisi.hapus')->middleware('verified');
});


//Eskul di halaman admin
Route::prefix('eskul')->group( function() {
	Route::get('/', 'Admin\EskulController@index')->name('eskul')->middleware('verified');
	//Datatable Eskul
	Route::get('/data', 'Admin\EskulController@eskulDatatables')->name('eskul.data')->middleware('verified');
	//tambah data eskul
	Route::get('/tambah', 'Admin\EskulController@create')->name('eskul.tambah')->middleware('verified');
	Route::post('/post', 'Admin\EskulController@store')->name('eskul.post')->middleware('verified');
	//ubah data eskul
	Route::get('/edit/{id}', 'Admin\EskulController@edit')->name('eskul.edit')->middleware('verified');
	Route::put('/{id}', 'Admin\EskulController@update')->name('eskul.update')->middleware('verified');
	//delete data eskul
	Route::delete('/{id}', 'Admin\EskulController@destroy')->name('eskul.hapus')->middleware('verified');
});

// Halaman Admin: Pengumuman
Route::prefix('pengumuman')->group(function(){
	Route::get('/', 'Admin\pengumumanController@index')->name('pengumuman')->middleware('verified');
	Route::get('/data', 'Admin\pengumumanController@pengumumanDatatables')->name('pengumuman.data')->middleware('verified');
	Route::get('/tambah', 'Admin\pengumumanController@create')->name('pengumuman.tambah')->middleware('verified');
	Route::post('/post', 'Admin\pengumumanController@store')->name('pengumuman.post')->middleware('verified');
	Route::get('/{id}/edit-pengumuman', 'Admin\pengumumanController@edit')->name('pengumuman.edit')->middleware('verified');
	Route::delete('/{id}/hapus', 'Admin\pengumumanController@destroy')->name('pengumuman.delete')->middleware('verified');
});

// Halaman Admin: Pengumuman
Route::prefix('berita')->group(function(){
	Route::get('/', 'Admin\beritaController@index')->name('berita')->middleware('verified');
	Route::get('/data', 'Admin\beritaController@beritaDatatables')->name('berita.data')->middleware('verified');
	Route::get('/tambah', 'Admin\beritaController@create')->name('berita.tambah')->middleware('verified');
	Route::post('/post', 'Admin\beritaController@store')->name('berita.post')->middleware('verified');
	Route::get('/{id}/edit-berita', 'Admin\beritaController@edit')->name('berita.edit')->middleware('verified');
	Route::delete('/{id}/hapus', 'Admin\beritaController@destroy')->name('berita.delete')->middleware('verified');
});
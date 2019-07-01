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
	Route::get('/data', 'Admin\KelasController@kelasDatatables')->name('kelas.data');
	// Tambah Kelas
	Route::get('/tambah', 'Admin\KelasController@create')->name('kelas.tambah');
	// Post Tambah & Ubah Kelas
	Route::post('/post', 'Admin\KelasController@store')->name('kelas.post');
	// Edit Kelas
	Route::get('/{id}/edit', 'Admin\KelasController@edit')->name('kelas.edit');
	// Hapus Kelas
	Route::delete('/{id}/hapus', 'Admin\KelasController@destroy')->name('kelas.delete');
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
	// Tambah Data
	Route::get('/tambah', 'Admin\LinkController@create')->name('link.add');
	Route::post('/post', 'Admin\LinkController@store')->name('link.store');
	// Upload Foto
	Route::get('/upload', 'Admin\LinkController@upload')->name('link.upload');
	// Ubah Data
	Route::get('/edit/{id}', 'Admin\LinkController@edit')->name('link.edit');
	Route::post('/post/{id}', 'Admin\LinkController@update')->name('link.update');
	// Hapus Data
	Route::delete('delete/{id}', 'Admin\LinkController@destroy')->name('link.delete');
}});


//Profile Sekolah di halaman admin
Route::prefix('profilesekolah')->group(function() {
	Route::get('/', 'Admin\ProfileSekolahController@index')->name('profilesekolah');
	//ubah Profile 
	Route::get('/{id}/edit', 'Admin\ProfileSekolahController@edit')->name('profilesekolah.edit');
	Route::put('/{id}', 'Admin\ProfileSekolahController@update')->name('profilesekolah.post');
});

//Visi dan Misi di halaman Admin
Route::prefix('visimisi')->group(function() { 
	Route::get('/', 'Admin\VisiMisiController@index')->name('visimisi');
	//kelola data visi dan misi
	Route::get('/manage', 'Admin\VisiMisiController@manage')->name('visimisi.manage');
	//tambah data visi dan misi
	Route::get('/tambah', 'Admin\VisiMisiController@create')->name('visimisi.tambah');
	Route::post('/post', 'Admin\VisiMisiController@store')->name('visimisi.add');
	//ubah data visi dan misi
	Route::get('/{id}/edit', 'Admin\VisiMisiController@edit')->name('visimisi.edit');
	Route::put('/{id}', 'Admin\VisiMisiController@update')->name('visimisi.post');
	//hapus data visi dan misi
	Route::delete('/{id}', 'Admin\VisiMisiController@destroy')->name('visimisi.hapus');
});


//Eskul di halaman admin
Route::prefix('eskul')->group( function() {
	Route::get('/', 'Admin\EskulController@index')->name('eskul');
	//Datatable Eskul
	Route::get('/data', 'Admin\EskulController@eskulDatatables')->name('eskul.data');
	//tambah data eskul
	Route::get('/tambah', 'Admin\EskulController@create')->name('eskul.tambah');
	Route::post('/post', 'Admin\EskulController@store')->name('eskul.post');
	//ubah data eskul
	Route::get('/edit/{id}', 'Admin\EskulController@edit')->name('eskul.edit');
	Route::put('/{id}', 'Admin\EskulController@update')->name('eskul.update');
	//delete data eskul
	Route::delete('/{id}', 'Admin\EskulController@destroy')->name('eskul.hapus');
});
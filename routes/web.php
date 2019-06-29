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

//Halaman Admin Tahun Ajaran 
Route::get('/tahun-ajaran', 'Admin\TahunAjaranController@index')->name('tahunajaran');
// Datatable Tahun Ajaran
Route::get('/tahun-ajaran/data', 'Admin\TahunAjaranController@tahunDatatables')->name('tahun.data');
// Tambah Data Tahun Ajaran
Route::get('/tahun-ajaran/tambah', 'Admin\TahunAjaranController@create')->name('tahun.tambah');
// Post Tambah & Ubah Tahun Ajaran
Route::post('/tahun-ajaran/post', 'Admin\TahunAjaranController@store')->name('tahun.post');
// Edit Tahun Ajaran
Route::get('/tahun-ajaran/{id}/edit', 'Admin\TahunAjaranController@edit')->name('tahun.edit');
// Hapus Tahun Ajaran
Route::delete('/tahun-ajaran/{id}/hapus', 'Admin\TahunAjaranController@destroy')->name('tahun.delete');


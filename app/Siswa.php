<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'id';
    protected $fillable = [
    	'nisn',
    	'nis',
    	'nama',
    	'jk',
    	'tgl_lahir',
    	'tmpt_lahir',
    	'foto',
    	'id_tahun_ajaran',
    	'id_kelas',
    ];

    public function tahunajaran()
    {
    	return $this->belongsTo('App\TahunAjaran');
    }

    public function kelas()
    {
    	return $this->belongsTo('App\Kelas');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileSekolah extends Model
{
    protected $table = 'profile_sekolah';
    protected $primaryKey = 'id';

    protected $fillable = [
    	'nama',
    	'npsn',
    	'kode_un',
    	'nis',
    	'website',
    	'email',
    	'no_sk_pendirian_sekolah',
    	'tgl_pendirian',
    ];
}

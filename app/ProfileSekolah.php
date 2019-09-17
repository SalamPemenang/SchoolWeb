<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileSekolah extends Model
{
    protected $table = 'profile_sekolah';
    protected $primaryKey = 'id';

    protected $fillable = [
    	'logo',
        'nama',
    	'npsn',
    	'nis',
    	'kode_un',
        'alamat',
        'no_hp',
        'faximile',
    	'no_sk_pendirian_sekolah',
    	'tgl_pendirian',
    	'website',
    	'email',
        'facebook',
        'twitter',
        'instagram',
        'maps',
    ];
}

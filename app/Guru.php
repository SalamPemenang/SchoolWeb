<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';
    protected $primaryKey = 'id';
    protected $fillable = [
    	'nuptk',
    	'nip',
    	'nama',
    	'jk',
    	'tgl_lahir',
    	'tmpt_lahir',
    	'alamat',
    ];
}

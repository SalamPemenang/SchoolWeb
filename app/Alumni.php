<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    protected $table = 'alumni';
    protected $primaryKey = 'id';
    protected $fillable = [
    	'nama',
    	'jk',
    	'thn_lulus',
    	'foto',
    	'pendidikan_lanjutan',
    ];
}

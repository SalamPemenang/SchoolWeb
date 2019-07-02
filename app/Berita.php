<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita';
    protected $primaryKey = 'id';
    protected $fillable = [

    	'judul',
    	'foto',
    	'tgl',
    	'deskripsi',
    ];
}

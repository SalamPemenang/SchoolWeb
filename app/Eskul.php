<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eskul extends Model
{
    protected $table = 'eskul';
    protected $primaryKey = 'id';
    protected $fillable = [
    	'nama',
    	'pembimbing',
    	'jadwal',
    ];
}

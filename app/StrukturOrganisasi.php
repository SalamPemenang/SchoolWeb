<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StrukturOrganisasi extends Model
{
    protected $table = 'struktur_organisasi';
    protected $primaryKey = 'id';
    protected $fillable = [
    	'foto',
    ];
}

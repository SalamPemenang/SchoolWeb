<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'galeri';

    protected $primaryKey = 'id';

    protected $fillable = [
    	'foto',
    	'video',
    	'id_category_galeri',
    ];
}

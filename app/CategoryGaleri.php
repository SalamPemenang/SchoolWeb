<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryGaleri extends Model
{
    protected $table = 'category_gallery';

    protected $primaryKey = 'id';

    protected $fillable = [
    	'nama',
    ];
}

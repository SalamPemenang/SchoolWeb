<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryFasilitas extends Model
{
    protected $table = 'category_fasilitas';

    protected $primaryKey = 'id';

    protected $fillable = [
    	'nama',
    ];
}

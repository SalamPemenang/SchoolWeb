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


    public function gallery()
    {
    	return $this->hasMany(Gallery::class);
    }
}

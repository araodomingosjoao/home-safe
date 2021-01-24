<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HouseImage extends Model
{
    protected $table = 'house_images';
    protected $fillable = ['house_id', 'path', 'path_cache'];

    public function house()
    {
        return $this->belongsTo(House::class, 'house_id', 'id');
    }
}

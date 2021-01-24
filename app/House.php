<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
   protected $table = "houses";

   protected $fillable = [
       'user_id', 'location', 'price_sale', 'price_rent', 'description', 'type', 'status',
   ];

   public function user()
   {
        return $this->belongsTo(User::class, 'user_id', 'id');
   }

   public function images()
   {
        return $this->hasMany(HouseImage::class, 'house_id', 'id');
   }
}

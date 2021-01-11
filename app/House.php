<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
   protected $table = "houses";

   protected $fillable = [
       'user_id', 'location', 'price_sale', 'price_rent', 'description', 'type', 'status',
   ];

}

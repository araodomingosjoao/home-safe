<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Houses extends Model
{
   protected $table = "houses";

   protected $fillable = [
       'user_id', 'localização', 'preçoVenda', 'preçoAlugel', 'detalhes',
   ];

}

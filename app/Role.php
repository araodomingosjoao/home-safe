<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function user()
    {
        $this->belongsTo('App\Role', 'role_id');
    }

}

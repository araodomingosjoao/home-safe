<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function notification()
    {
        return $this->hasOne(Notification::class);
    }
}

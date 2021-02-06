<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Client;

class Notification extends Model
{
    protected $fillable = ['house_id', 'client_id'];

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }
}

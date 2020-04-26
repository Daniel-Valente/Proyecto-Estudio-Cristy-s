<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dispositivo extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}

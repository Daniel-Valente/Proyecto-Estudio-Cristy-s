<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    public $timestamps = false;

    public function orden()
    {
        return $this->hasMany(Orden::class);
    }
}

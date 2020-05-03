<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    public $timestamps = false;

    public function ordens()
    {
        return $this->hasMany(Orden::class);
    }

}

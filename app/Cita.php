<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    public function ordens()
    {
        return $this->hasOne(Orden::class);
    }
}

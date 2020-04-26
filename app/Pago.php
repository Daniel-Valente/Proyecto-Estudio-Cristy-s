<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    public function ordens()
    {
        return $this->belongsTo(Orden::class);
    }
}

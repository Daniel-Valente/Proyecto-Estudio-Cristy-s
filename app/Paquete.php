<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    public function orden()
    {
        return $this->belongsTo(Orden::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    public function categorias()
    {
        return $this->belongsTo(Categoria::class);
    }
}

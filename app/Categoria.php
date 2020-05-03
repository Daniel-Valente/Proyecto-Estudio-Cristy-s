<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public $timestamps = false;

    public function ordens()
    {
        return $this->hasMany(Orden::class);
    }

    public function pagos()
    {
        return $this->hasMany(Pago::class);
    }
}

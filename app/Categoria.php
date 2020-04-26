<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public function ordens()
    {
        return $this->belongsTo(Orden::class);
    }
}

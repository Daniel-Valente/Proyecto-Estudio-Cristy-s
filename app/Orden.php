<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function categorias()
    {
        return $this->hasMany(Categoria::class);
    }
    public function citas()
    {
        return $this->belongsTo(Cita::class);
    }

}

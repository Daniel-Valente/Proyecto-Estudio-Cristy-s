<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    protected $fillable = [
        'categoria_id', 'user_id',
        'fecha_Cita', 'fecha_Orden',
        'fecha_Entrega', 'descripcion'
    ];
    protected $dates = ['fecha_Orden', 'fecha_Cita', 'fecha_Entrega', 'created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categorias()
    {
        return $this->hasMany(Categoria::class);
    }

    public function paquetes()
    {
        return $this->hasMany(Paquete::class);
    }
}

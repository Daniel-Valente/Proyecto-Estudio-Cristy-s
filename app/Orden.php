<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Orden extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'categoria_id', 'user_id',
        'cita_id', 'fecha_Cita',
        'fecha_Orden', 'fecha_Entrega',
        'descripcion','estatus'
    ];

    protected $dates = ['fecha_Orden', 'fecha_Cita', 'fecha_Entrega', 'created_at', 'updated_at', 'deleted_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function pagos()
    {
        return $this->hasMany(Pago::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function cita()
    {
        return $this->belongsTo(Cita::class);
    }

    public function paquetes()
    {
        return $this->belongsTo(Paquete::class);
    }

    //Query Scope
    public function scopeDate($query, $date)
    {
        if($date)
            return $query->where('fecha_Orden', 'LIKE', "%$date%");
    }
}

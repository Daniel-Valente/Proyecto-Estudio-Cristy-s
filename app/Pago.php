<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Pago extends Model
{
    protected $fillable = [
        'orden_id', 'user_id',
        'pago', 'fecha_Pago',
        'restante', 'estatus',
    ];

    protected $dates = ['fecha_Pago', 'created_at', 'updated_at'];

    public function orden()
    {
        return $this->belongsTo(Orden::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    //Query Scope
    public function scopeDate($query, $date)
    {
        if($date)
            return $query->where('fecha_Pago', 'LIKE', "%$date%");
    }
}

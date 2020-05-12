<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $fillable = [
        'orden_id', 'user_id',
        'pago', 'fecha_Pago',
    ];

    protected $dates = ['fecha_Pago'];

    public $timestamps = false;

    public function orden()
    {
        return $this->belongsTo(Orden::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}

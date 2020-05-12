<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    protected $fillable = [
        'user_id', 'categoria_id',
        'nombre_hash', 'nombre_original',
        'tamaño', 'mime'
    ];

    public $timestamps = false;

    public function getUrlImgAttribute()
    {
        return \Storage::url($this->nombre_original);
    }

    public function user()
    {
        return $this->morphTo(User::class);
    }

    public function categoria()
    {
        return $this->morphTo(Categoria::class);
    }
}

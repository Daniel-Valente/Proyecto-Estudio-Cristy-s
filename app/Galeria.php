<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    protected $fillable = [
        'user_id', 'categoria_id',
        'nombre_hash', 'nombre_original'
    ];

    public $timestamps = false;

    public function getUrlImgAttribute()
    {
        return \Storage::url($this->nombre_original);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}

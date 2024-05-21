<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shared extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'titulo',
        'descripcion',
        'plataforma',
        'user_id',
        'url',
        'conteo',
        'activo',
        'etiquetas',
        'tipo',
        'vistas',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function image(){

        return $this->morphone(Image::class, 'imageable');
    
     }

}

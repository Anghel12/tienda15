<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeBaner extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'extract',
        'cursos',
        'articulos',
        'users',
        'coins',
        'user_id',
        'fecha_inicio',
        'fecha_fin',
        'activo',
        'posicion',
        'tipo',
        'enlace'
    ];

    // Relación con el usuario creador del banner
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    //relacion uno a uno polimorfica
    
    public function images(){
        return $this->morphone(Image::class, 'imageable');
    }

}

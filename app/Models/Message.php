<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $table = 'messages';

    protected $fillable = [
        'destinatario',
        'remitente',
        'asunto',
        'contenido',
        'estado',
        'adjuntos',
        'fecha_envio',
        'prioridad',
        'tipo'
    ];

     // Relación muchos a uno con el modelo User
     public function user()
     {
         return $this->belongsTo(User::class, 'destinatario');
     }
}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Detalle;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'subtotal',
        'impuesto',
        'total',
        'entregado',
        'user_id'
    ];

     //relacion uno a muchos polimorfica

    public function detalles(){
            return $this->hasMany(Detalle::class);
    }
//relacion invesa uno a uno 
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

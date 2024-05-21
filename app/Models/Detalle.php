<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    use HasFactory;

    protected $fillable = [
        'cantidad',
        'preciototal',
        'user_id',
        'producto_id'
    ];
     //relacion uno a muchos inversa

    public function pedido(){
        return $this->belongsTo(Pedido::class);
    }

    //relacion uno a uno polimorfica

    public function post(){
        return $this->belongsTo(Post::class);
}
}

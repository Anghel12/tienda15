<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuracion extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

     //relacion uno a muchos inversa
     public function user(){
        return $this->belongsTo(User::class);
    }
    
        //Relacion uno a muchos polimorfica
        public function other_pageable(){
        
            return $this->morphMany(OtherPage::class, 'other_pageable');
        }
}

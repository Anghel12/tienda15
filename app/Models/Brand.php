<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
/* marcas */
    protected $guarded = ['id', 'created_at', 'updated_at'];

      //relacion uno a muchos inversa
      public function user(){
        return $this->belongsTo(User::class);
    }

        // relacion uno a muchos
        public function posts(){
            return $this->hasMany(Post::class);
         }

         //imagenes relacionadas

          //relacion uno a uno polimorfica

    public function image(){
        return $this->morphone(Image::class, 'imageable');
        }
}

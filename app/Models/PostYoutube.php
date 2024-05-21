<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostYoutube extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    //relacion uno a muchos inversa
    public function user(){
        return $this->belongsTo(User::class);
    }
    
    //relacion uno a muchos inversa
    public function category(){
        return $this->belongsTo(Category::class);
    }

      //relacion muchos a muchos
      public function tags(){
        return $this->BelongsToMany(Tag::class);
    }

      //relacion uno a uno polimorfica

    public function image(){

     return $this->morphone(Image::class, 'imageable');
    
    }
    
     //Relacion uno a muchos polimorfica
     public function comment(){
            
        return $this->morphMany(Comment::class, 'commentable');
    }

     //URL DE videos falta relacion uno a uno polimorfica
        

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subCategory extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];
    
    use HasFactory;

    
    //relacion uno a muchos inversa
    public function user(){
        return $this->belongsTo(User::class);
    }

     //relacion uno a muchos inversa
    public function category(){
         return $this->belongsTo(Category::class);
    }

      //category relacion uno a muchos post
      public function posts(){
        return $this->hasMany(Post::class);
     }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    use HasFactory;


     //relacion muchos a muchos inversa POSTS
     public function posts(){
        return $this->belongsToMany(Post::class)->withPivot('price', 'quantity') ;
    }

    //relacion uno a muchos inversa
    public function user(){
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

     //relacion uno a muchos inversa
     /* protected $fillable = [
        'mensaje',
        'user_id'
        
    ]; */
    protected $guarded = [];


     public function user(){
        return $this->belongsTo(User::class);
    }

     //relacion polimorfica

     public function commentable(){
        return $this->morphTo();
    }
}

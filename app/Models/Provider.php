<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;
    /* proveedroes */

    protected $guarded = ['id', 'created_at', 'updated_at'];

       //relacion uno a muchos inversa
       public function user(){
        return $this->belongsTo(User::class);
    }

}

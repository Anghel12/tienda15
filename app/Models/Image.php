<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['url', 'created_by'];
 
      //relacion polimorfica

      public function imageable(){
        return $this->morphTo();
    }


    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

}

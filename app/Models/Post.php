<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasActivities;

class Post extends Model
{
    use HasFactory;
    /* historial actividades */
    use HasActivities; 

    protected $guarded = ['id', 'created_at', 'updated_at'];

    //relacion uno a muchos inversa
    public function user(){
        return $this->belongsTo(User::class);
    }

    //relacion uno a muchos inversa
    public function category(){
        return $this->belongsTo(Category::class);
    }

     //relacion uno a muchos inversa
     public function sub_categoria(){
        return $this->belongsTo(subCategory::class);
    }

    //relacion uno a muchos inversa
    public function brand(){
        return $this->belongsTo(brand::class);
    }

      //relacion muchos a muchos
      public function orders(){
        return $this->BelongsToMany(Order::class);
    }

     //relacion muchos a muchos
     public function tags(){
        return $this->BelongsToMany(Tag::class);
    }

     //relacion uno a uno polimorfica
   /*   public function images(){
        return $this->morphMany(Image::class, 'imageable');
        } */
    public function images(){
        return $this->morphone(Image::class, 'imageable');
    }

     //Relacion uno a muchos polimorfica
     public function comment(){
        
        return $this->morphMany(Comment::class, 'commentable');
    }

 //relacion uno a uno polimorfica
    public function price(){
        
        return $this->morphone(Price::class, 'priceable');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class UserActivity extends Model
{
    use HasFactory;
/* relacion polimorfica actividad de usuarios en la web  */
    protected $fillable = [
        'activity', // Agrega aquí cualquier otro atributo asignable en masa si es necesario
    ];

    public function subject()
    {
        return $this->morphTo();
    
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /* borrar antiguo */
     public function activities()
    {
        return $this->hasMany(UserActivity::class);
    } 
}

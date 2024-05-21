<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    use HasFactory;

    protected $table = 'referrals'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'user_id',
        'referred_user_id',
        'parent_id',
        'referring_user_id',
        'referral_code',
        'is_used',
        'points',
        'status',
        'amount'
    ];

      /**
     * Obtiene el usuario que se ha referido
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Obtiene el usuario referido
     */
    public function referredUser()
    {
        return $this->belongsTo(User::class, 'referred_user_id');
    }

    /**
     * Obtiene el usuario padre que refirió al usuario
     */
    public function parent()
    {
        return $this->belongsTo(User::class, 'parent_id');
    }

    /**
     * Obtiene el usuario que refirió al usuario
     */
    public function referringUser()
    {
        return $this->belongsTo(User::class, 'referring_user_id');
    }

   /*  public function UserParents()
    {
        return $this->belongsTo(UserParent::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(UserParent::class, 'parent_id');
    } */
}


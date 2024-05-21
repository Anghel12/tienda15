<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Coin extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'symbol',
        'exchange_rate'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_coins')->withPivot('balance');
    }
    


}

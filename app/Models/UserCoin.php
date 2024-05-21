<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class UserCoin extends Pivot
{
    protected $table = 'user_coins';
    
    protected $fillable = [
        'user_id',
        'coin_id',
        'balance',
        'ct_balance',
        'created_at', 
        'updated_at'
    ];

    public static function factory()
    {
        return new \Database\Factories\UserCoinFactory();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'discount_percentage',
        'discount_amount',
        'start_date',
        'end_date',
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loans extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'amount',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function loanDetails()
    {
        return $this->hasMany(LoanDetail::class);
    }
}

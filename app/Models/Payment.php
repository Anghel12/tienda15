<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'amount',
        'currency',
        'status',
        'card_last_four_digits',
        'ip_address',
        'payment_method_id',
    ];

    public function paymentMethod()
    {   
    return $this->belongsTo(PaymentMethod::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function loanDetail()
    {
        return $this->belongsTo(LoanDetail::class);
    }
}

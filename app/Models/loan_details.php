<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loan_details extends Model
{
    use HasFactory;

    protected $fillable = [
        'loan_id',
        'amount',
        'payment_date',
        'interest_rate',
        'installment_period',
        'due_date',
        'late_fee',
        'status',
    ];

    public function loan()
    {
        return $this->belongsTo(Loan::class);
    }
}

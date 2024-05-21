<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrackingData extends Model
{
    use HasFactory;

    protected $table = 'tracking_data';
    
    protected $fillable = ['tracking_id', 'user_id', 'page', 'action'];
}

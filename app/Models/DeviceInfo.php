<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'ip_address',
        'screen_resolution',
        'browser',
        'operating_system',
        'device_type',
        'country',
        'state',
        'city',
        'session_start',
        'session_end',
        'page_url'
    ];
}

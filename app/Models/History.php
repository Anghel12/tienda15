<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'table_name',
        'action',
        'before',
        'after',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function setBeforeAttribute($value)
    {
        $this->attributes['before'] = json_encode($value);
    }

    public function getBeforeAttribute($value)
    {
        return json_decode($value, true);
    }

    public function setAfterAttribute($value)
    {
        $this->attributes['after'] = json_encode($value);
    }

    public function getAfterAttribute($value)
    {
        return json_decode($value, true);
    }
}

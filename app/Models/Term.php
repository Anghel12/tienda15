<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'title',
        'content',
        'version',
        'published_at',
        'is_current',
        'author_id',
        'is_active',
        'expires_at',
        'accepted_at',
        'accepted_ip'
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'is_current' => 'boolean',
        'is_active' => 'boolean',
        'expires_at' => 'datetime',
        'accepted_at' => 'datetime'
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}

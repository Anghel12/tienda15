<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = ['title', 
    'description', 
    'url', 
    'videoable_id', 
    'videoable_type', 
    'user_id',
    'commentable'
];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    /**
     * Get the parent videoable model (post, blog, product, etc).
     */
    public function videoable()
    {
        return $this->morphTo();
    }
    /**
     * Get the user that owns the video.
     */
     public function comments(){

        return $this->morphMany(Comment::class, 'commentable');
    
    }
}

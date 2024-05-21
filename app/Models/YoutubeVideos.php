<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YoutubeVideos extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'video_id',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function videoable()
    {
        return $this->morphTo();
    }

    public function commentable()
    {
        return $this->morphTo();
    }
}

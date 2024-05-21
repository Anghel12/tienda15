<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    
    protected $fillable = ['titulo', 'area', 'detalles', 'created_by'];

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function createdBy()
{
    return $this->belongsTo(User::class, 'created_by');
}

}

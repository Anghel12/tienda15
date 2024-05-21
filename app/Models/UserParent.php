<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserParent extends Model
{
    use HasFactory;

    protected $table = 'user_parents';

    protected $fillable = [
        'user_id',
        'parent_id',
        'level',
        'path',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

/*     public function userparents()
    {
    return $this->belongsToMany(User::class, 'parents', 'user_id', 'parent_id')
        ->withPivot('level', 'path')
        ->withTimestamps();
    }
 */
    public function parent()
    {
        return $this->belongsTo(User::class, 'parent_id');
    }

  /*   public function UserParents()
    {
        return $this->belongsTo(User::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(User::class, 'parent_id');
    } */
}

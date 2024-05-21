<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use App\Models\UserActivity;

trait HasActivities
{
    public function activities(): MorphMany
    {
        return $this->morphMany(UserActivity::class, 'subject');
    }

    public function recordActivity(string $activity): void
    {
        /* se encarga solo de poner el usuario id */
        $this->activities()->create([
            'activity' => $activity,
        ]);
    }
}

<?php

namespace App\Actions\Jetstream;

use Laravel\Jetstream\Contracts\DeletesUsers;
use App\Models\UserActivity;
use Illuminate\Support\Facades\Auth;

class DeleteUser implements DeletesUsers
{
    /**
     * Delete the given user.
     *
     * @param  mixed  $user
     * @return void
     */
    public function delete($user)
    {
        $user->deleteProfilePhoto();
        $user->tokens->each->delete();
        $user->delete();

        
          // Registrar la actividad del usuario
          $user = Auth::user();
          UserActivity::create([
              'user_id' => $user->id,
              'activity' => 'Elimino su cuenta el Usuario:',
          ]);
        
    }
}

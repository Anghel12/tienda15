<?php

namespace App\Actions\Fortify;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\ResetsUserPasswords;
use App\Models\UserActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResetUserPassword implements ResetsUserPasswords
{
    use PasswordValidationRules;

    /**
     * Validate and reset the user's forgotten password.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function reset($user, array $input)
    {
        Validator::make($input, [
            'password' => $this->passwordRules(),
        ])->validate();

        $user->forceFill([
            'password' => Hash::make($input['password']),
        ])->save();

         // Registrar la actividad del usuario
         $user = Auth::user();
         UserActivity::create([
             'user_id' => $user->id,
             'activity' => 'Restablecimiento de contraseña',
         ]);
    }
}

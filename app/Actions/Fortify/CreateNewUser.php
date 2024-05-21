<?php

namespace App\Actions\Fortify;

use App\Models\Referral;
use App\Models\User;
use App\Models\UserParent;
use Dotenv\Exception\ValidationException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class CreateNewUser implements CreatesNewUsers
{
    /* falta poner en caso un codigo no exista  */
    use PasswordValidationRules;

    /**
     * Valida y crea un usuario recién registrado.
     *
     * @param  array  $input
     * @param  User|null  $referringUser
     * @return \App\Models\User
     */
    public function create(array $input)
{
    Validator::make($input, [
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => $this->passwordRules(),
        'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        'referral_code' => ['nullable', 'exists:users,referral_code'] // Agregado exists:users,referral_code
    ])->validate();

    // Asigna el código de referencia al usuario recién creado
    $user = User::create([
        'name' => $input['name'],
        'email' => $input['email'],
        'password' => Hash::make($input['password']),
        'referral_code' => $this->generateUniqueReferralCode(),
    ])->assignRole('Blogger');


    if (!empty($input['referral_code'])) {
        // Verifica si el código de referencia es válido
        $referral = User::where('referral_code', $input['referral_code'])->first();
   
        if ($referral) {
        // Si se proporcionó un código de referencia válido, crea una nueva referencia y actualiza la tabla de padres de usuario
        $newReferral = new Referral();
        $newReferral->user_id = $user->id;
        $newReferral->referred_user_id = $user->id;
        $newReferral->referral_code = $input['referral_code'];
        $newReferral->parent_id = $referral->id;
        $newReferral->referring_user_id = $referral->id;
        $newReferral->points = +10;
        $newReferral->status = 'Registred';
        $newReferral->save();

        $userParent = new UserParent();
        $userParent->user_id = $user->id;
        $userParent->parent_id = $referral->id;;
        $userParent->level = 1;
        $userParent->path = $referral->id;;
        $userParent->save();

        // Actualiza los padres de los usuarios anteriores
        $previousParents = UserParent::where('user_id', $referral->id)->get();
        foreach ($previousParents as $previousParent) {
            $previousPath = $previousParent->path;
            $previousParent->path = $previousPath.','.$user->id;
            $previousParent->level += 1;
            $previousParent->save();
        }
        
    }
    
    }

    return $user;
}




 /**
 * Genera un código de referencia único para un nuevo usuario.
 *
 * @return string
 */
protected function generateUniqueReferralCode(): string
{
    $baseCode = Str::random(10);
    $referralCode = $baseCode . '-' . uniqid();

    // Verifica si el código de referencia ya existe en la base de datos
    while (Referral::where('referral_code', $referralCode)->exists()) {
        $referralCode = $baseCode . '-' . uniqid();
    }

    return $referralCode;
}

}

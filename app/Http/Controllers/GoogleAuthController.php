<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Cache;
use App\Models\Referral;
use App\Models\UserParent;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Illuminate\Support\Str;
use App\Models\UserActivity;


class GoogleAuthController extends Controller
{
   public function redirect(){
    return Socialite::driver('google')->redirect();
   }

   public function callbackGoogle(){

    try {
        $google_user = Socialite::driver('google')->user();

        $userExists = Cache::remember('google_user' . $google_user->getId(), 60 * 60, 
            function () use ($google_user) {
                return User::where('external_id', $google_user->getId())
                           ->where('external_auth', 'google')
                           ->first();
        });

        $userExists = User::where('external_id', $google_user->id)->where('external_auth', 'google')->first();

        if ($userExists) {

            Auth::login($userExists);
            return redirect()->intended('/');

        }else{
             $new_user = User::create([
                'name' =>  $google_user->name,
                'email' =>  $google_user->email,
                'profile_photo_path' => $google_user->avatar,
                'external_id' =>  $google_user->id,
                'external_auth' =>  'google',
                'referral_code' => $this->generateUniqueReferralCode(),
              
            ])->assignRole('Blogger');

            Mail::to($new_user->email)->send(new WelcomeEmail($new_user));

            Auth::login($new_user);

            /* registrar actividad del usuario atniguo borrar si peduedes */
            UserActivity::create([
                    'user_id' => $new_user->id,
                    'activity' => 'Usuario logueado con google count:',
                ]);  

            
        if (!empty($input['referral_code'])) {
        // Verifica si el código de referencia es válido
        $referral = User::where('referral_code', $input['referral_code'])->first();
   
        if ($referral) {
        // Si se proporcionó un código de referencia válido, crea una nueva referencia y actualiza la tabla de padres de usuario
        $newReferral = new Referral();
        $newReferral->user_id = $new_user->id;
        $newReferral->referred_user_id = $new_user->id;
        $newReferral->referral_code = $input['referral_code'];
        $newReferral->parent_id = $referral->id;
        $newReferral->referring_user_id = $referral->id;
        $newReferral->points = +10;
        $newReferral->status = 'Registred';
        $newReferral->save();

        $userParent = new UserParent();
        $userParent->user_id = $new_user->id;
        $userParent->parent_id = $referral->id;;
        $userParent->level = 1;
        $userParent->path = $referral->id;;
        $userParent->save();

        // Actualiza los padres de los usuarios anteriores
        $previousParents = UserParent::where('user_id', $referral->id)->get();
        foreach ($previousParents as $previousParent) {
            $previousPath = $previousParent->path;
            $previousParent->path = $previousPath.','.$new_user->id;
            $previousParent->level += 1;
            $previousParent->save();
        }
        
    }
    
    }

     return redirect()->intended('/');

    }   

    } catch (\Throwable $th) {
        
        dd('Algo salio Mal! o este correo ya esta siendo utilizado'. $th->getMessage());
    }
    
   }

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

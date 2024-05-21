<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Referral;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class ReferralController extends Controller
{   
    public function referral()
    {
        // Obtener el usuario actual
        $user = auth()->user();
    
        // Si el usuario ya tiene una referencia, usar la existente
        $referralCode = $user->referral_code;

        // Obtener el enlace de referencia del usuario actual
        $referralLink = url('/register?ref=' . $referralCode);
    
        // Obtener las referencias del usuario actual
        $referrals = $user->referrals;
    
        return view('admin.referrals.index', compact('referralLink', 'referrals'))
            ->with('success', 'User referido registered successfully.');
    }
    
    
    

 /*    protected function generateUniqueReferralCode(): string
    {
        $baseCode = Str::random(10);
        $suffix = Str::random(5);
        $referralCode = $baseCode . $suffix;

        // Verifica si el código de referencia ya existe en la base de datos
        while (Referral::where('referral_code', $referralCode)->exists()) {
            $suffix = Str::random(5);
            $referralCode = $baseCode . $suffix;
        }

        return $referralCode;
    } */
}

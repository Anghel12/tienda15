<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Follow;
use App\Models\Post;
use App\Models\Profile;
use App\Models\Referral;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class profileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 

    public function showProfile()
    {
      
    }
    public function index()
{
    // Obtener el usuario autenticado
    $user = auth()->user();

    // Verificar si el usuario está autenticado
    if ($user) {
        // Obtener solo los primeros 4 posts del usuario autenticado
        $user->posts = $user->posts()->take(1)->get();
    }

    // Obtener todos los perfiles
    $profiles = Profile::orderBy('created_at', 'desc')->take(8)->get();

    return view('admin.profile.index', compact('profiles', 'user'));
}

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profiles = Profile::orderBy('created_at', 'desc')->take(8)->get();
        $user = User::findOrFail($id);

        if ($user) {
            // Obtener solo los primeros 4 posts del usuario autenticado
            $user->posts = $user->posts()->take(1)->get();
        }
        $loggedInUser = auth()->user();

        // Obtener el número de registros y vistas del enlace de referidos del usuario actual
        $referralall = Referral::all();

         // Si el usuario ya tiene una referencia, usar la existente
         $referralCode = $user->referral_code;

         // Obtener el enlace de referencia del usuario actual
         $referralLink = url('/register?ref=' . $referralCode);

        return view('admin.profile.show', compact('profiles', 'user', 'referralLink', 'referralall'));
    
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

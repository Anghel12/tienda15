<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Follow;
use App\Models\User;
use Illuminate\Http\Request;

class FollowController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = auth()->user()->id; // Obtener el ID del usuario autenticado
        $user_follows = Follow::where('user_id', $userId)->get(); // Obtener los follows del usuario
        return view('admin.follows.index', compact('user_follows'));
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
    public function follow(User $user)
    {
        $loggedInUserId = auth()->user()->id;
        
        if ($user->id === $loggedInUserId) {
            return redirect()->back()->with('error', 'No puedes seguirte a ti mismo');
        }
        
        $follow = new Follow();
        $follow->user_id = $loggedInUserId;
        $follow->following_user_id = $user->id;
        $follow->save();
    
        return redirect()->back()->with('success', 'Ahora estás siguiendo a este usuario');
    }
    
    
    public function unfollow(User $user)
    {
        $loggedInUserId = auth()->user()->id;
    
        $follow = Follow::where('user_id', $loggedInUserId)->where('following_user_id', $user->id)->first();
    
        if ($follow) {
            $follow->delete();
        }
    
        return redirect()->back()->with('success', 'Has dejado de seguir a este usuario');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Follow  $follow
     * @return \Illuminate\Http\Response
     */
    public function show(Follow $follow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Follow  $follow
     * @return \Illuminate\Http\Response
     */
    public function edit(Follow $follow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Follow  $follow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Follow $follow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Follow  $follow
     * @return \Illuminate\Http\Response
     */
    public function destroy($followId)
    {
        $follow = Follow::findOrFail($followId);
        $follow->delete();

        return redirect()->back()->with('success', 'Has dejado de seguir a este usuario');
    }
}

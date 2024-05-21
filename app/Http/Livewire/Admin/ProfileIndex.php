<?php

namespace App\Http\Livewire\Admin;

use App\Models\Post;
use App\Models\User;
use Livewire\Component;

class ProfileIndex extends Component
{
    public function render()
    {

       /*  $users = User::where('user_id', auth()->user()->id)
        ->orderBy('id','DESC')->take(2)->get(); */

        $posts = Post::where('user_id', auth()->user()->id)
        ->orderBy('id','DESC')->take(3)->get();
        
        return view('livewire.admin.profile-index', compact('posts'));
    }
}

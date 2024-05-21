<?php

namespace App\Http\Livewire\Home;

use App\Models\Post;
use Livewire\Component;

class PostsIndex extends Component
{
    public $readyToLoad = false;
 
    public function loadPosts()
    {
        $this->readyToLoad = true;
    }
 
    public function render() 
    {
        return view('livewire.home.posts-index', [
            'posts' => $this->readyToLoad
                ? Post::all()
                : [],
        ]);
    }
}
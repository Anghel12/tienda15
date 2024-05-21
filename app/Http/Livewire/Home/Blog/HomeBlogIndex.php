<?php

namespace App\Http\Livewire\Home\Blog;

use App\Models\Post;
use App\Models\Slider;
use Livewire\Component;

class HomeBlogIndex extends Component
{
    public function render()
    {
        $sliders = Slider::all();
        $blogs = Post::latest()->limit(4)->get();
        return view('livewire.home.blog.home-blog-index', compact('sliders', 'blogs'));
    }
}

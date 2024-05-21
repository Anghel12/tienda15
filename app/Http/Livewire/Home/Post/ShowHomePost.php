<?php

namespace App\Http\Livewire\Home\Post;

use App\Models\Image;
use Livewire\Component;

class ShowHomePost extends Component
{
    public function render()
    {
        // Obtener las imágenes del usuario autenticado
        $images = Image::where('user_id', auth()->user()->id)->take(4)->get();
        
        // Pasar las imágenes a la vista
        return view('livewire.home.post.show-home-post', compact('images'));
    }
}

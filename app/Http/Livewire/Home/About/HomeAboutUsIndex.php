<?php

namespace App\Http\Livewire\Home\About;

use App\Models\AboutUsHome;
use Livewire\Component;

class HomeAboutUsIndex extends Component
{
    public function render()
    {

        $aboutUsHomes = AboutUsHome::all();
        return view('livewire.home.about.home-about-us-index', compact('aboutUsHomes'));
    }
}

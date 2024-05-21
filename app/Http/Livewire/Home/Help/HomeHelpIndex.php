<?php

namespace App\Http\Livewire\Home\Help;

use App\Models\HomeHelp;
use Livewire\Component;

class HomeHelpIndex extends Component
{
    public function render()
    {
        $HomeHelps = HomeHelp::all();
        return view('livewire.home.help.home-help-index', compact('HomeHelps'));
    }
}
 
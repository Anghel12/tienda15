<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContadorVistas extends Component
{
    public $vistas = 0;

    public function render()
    {
        return view('livewire.contador-vistas');
    }
}

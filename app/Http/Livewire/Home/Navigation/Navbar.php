<?php

namespace App\Http\Livewire\Home\Navigation;

use Livewire\Component;
use App\Models\Category;
use App\Models\Configuracion;
use App\Models\navbarConfig;

class Navbar extends Component
{
    protected $paginationTheme = 'bootstrap';
    
    public function render()
    {

        $categories = Category::all();
        $navbarConfigs = navbarConfig::all();

        return view('livewire.home.navigation.navbar', compact('categories', 'navbarConfigs'));
    }
}

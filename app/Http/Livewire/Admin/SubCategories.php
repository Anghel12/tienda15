<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\subCategory;
use Livewire\Component;

class SubCategories extends Component
{
    public function render()
    {
 
        $sub_categories = subCategory::orderBy('id','DESC')->paginate();
        return view('livewire.admin.sub-categories', compact('sub_categories'));
    }
}

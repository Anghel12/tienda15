<?php

namespace App\Http\Livewire\Home\Category;

use App\Models\Category;
use App\Models\Post;
use Livewire\Component;

class IndexHomeCategory extends Component
{
/*     public $category;

    public function mount(Category $category = null)
    {
        $this->category = $category;
    } 
 */
    public function render()
    {
  /*       $posts = Post::query()
            ->when($this->category, function ($query) {
                $query->where('category_id', $this->category->id);
            })
            ->where('status', 2)
            ->latest('id')
            ->paginate(6);

        return view('livewire.home.category.index-home-category', [
            'posts' => $posts,
            'category' => $this->category,
        ]); */
        return view('livewire.home.category.index-home-category');
    }
}

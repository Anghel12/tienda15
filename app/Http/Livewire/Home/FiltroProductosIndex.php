<?php

namespace App\Http\Livewire\Home;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Post;
use App\Models\subCategory;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;
use Livewire\WithPagination;


class FiltroProductosIndex extends Component
{
    use WithPagination;
    /* paginacion y si marca esta vacio */
        /**filtro por precio  */
    public $min_price;
    public $max_price;

    public function mount(){

        $this->min_price = Post::min('price_reciente');
        $this->max_price = Post::max('price_reciente');
    }

/**filtro por marcas  */
    public $perPage = 4;


    public $filters = [
        'brands' => [],
        'categories' => [],
    ];

    public function getBrandsProperty(){

        return Brand::all();
    }

    public function getCategoriesProperty(){

        return Category::all();
    }



    public function updatingPerPage(){
        $this->resetPage();
    }

    public function getResultsProperty(){


        $this->filters['brands'] = array_filter($this->filters['brands']);


        $this->filters['categories'] = array_filter($this->filters['categories']);
        
           /* comprobar si exiten filtro perpage esta marcado como all */
        if ($this->perPage == 'all') {

            $numero = Post::all()->count();

        } else {

            $numero = $this->perPage;
        }

        /* comprobar si exiten el filtro marcas y el filtro precio */

         if (empty([$this->filters['brands'], $this->filters['categories']])) {
            

            return Post::where('status', 2)->latest('id')->paginate(4);
         /*   return  Post::whereBetween('price_reciente', [$this->min_price, $this->max_price])
           ->paginate($numero); */

        } else{

    

        return  Post::whereIn('brand_id', array_keys( $this->filters['brands']))
        ->whereBetween('price_reciente', [$this->min_price, $this->max_price])
        ->orwhere('category_id', array_keys( $this->filters['categories']))
        ->paginate($numero);

        Cache::flush();
    }

    }


    public function render()
    {
        return view('livewire.home.filtro-productos-index');

    }


    
}

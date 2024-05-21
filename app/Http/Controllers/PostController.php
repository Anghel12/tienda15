<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Configuracion;
use App\Models\PostYoutube;
use App\Models\Slider;
/* cache */
use Illuminate\Support\Facades\Cache;
/* vistas del post*/
use App\Http\Livewire\ContadorVistas;
use App\Models\HomeBaner;
use App\Models\Image;
use App\Models\Review;

class PostController extends Controller
{


    public function index(POST $post){

        if (request()->page) {
            $key = 'posts' . request()->page;

        } else {
            $key = 'posts';
        }
        
        if (cache::has($key)) {
            $posts = cache::get($key);
        } else {

            $posts = Post::where('status', 2)->latest('id')->take(20)->get();
            cache::put($key, $posts);
        }

        $postyoutubes = PostYoutube::all();
        $tags = Tag::all();
        $sliders = Slider::all();
        $categories = category::all();
        $configuracion_homes = Configuracion::all();
        $banners = HomeBaner::all();
        $reviews = Review::all();

        return view('posts.index', compact('posts', 'tags', 'sliders', 'configuracion_homes', 'postyoutubes','categories', 'banners', 'reviews'));
        
    }

    

    public function show(POST $post, Tag $tag){

        $this->authorize('published', $post);

        // Incrementa el contador de vistas en la base de datos
        $post->vistas++;
        $post->save();

        $similares = Post::where('category_id', $post->category_id)
                            ->where('status', 2)
                            ->where('id', '!=', $post->id)
                            ->take(4)
                            ->latest('id')
                            ->get();

        $comment = Comment::where('commentable_id', $post->id)->latest('id')->get();

     Cache::flush();

       // Obtener las imágenes asociadas al post
        $images = $post->images()->take(4)->get();
        

      return view('posts.show', compact('post', 'tag', 'similares', 'comment', 'images'));
 
    }

  /*   public function category(category $category){

        $posts = Post::where('category_id', $category->id)
                            ->where('status', 2) 
                            ->latest('id')
                            ->paginate(6);
        return view('posts.category', compact('posts', 'category' ));

    } */

    public function tag(Tag $tag){

        $posts = $tag->posts()->where('status', 2)->latest('id')->paginate(3);

        return view('posts.tag', compact('posts', 'tag') );
    }
}

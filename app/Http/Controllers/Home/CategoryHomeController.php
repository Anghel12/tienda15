<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {     
        $categories = category::all();
        return view('home.category.index', compact('categories'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {

        $categories = category::all();

        $posts = Post::where('category_id', $category->id)
        ->where('status', 2)
        ->latest('id')
        ->paginate(6);
        return view('home.category.show', compact('posts', 'category','categories' ));
    }

   
}

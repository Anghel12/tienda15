<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Favorite;
use App\Models\Post;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $favorites = auth()->user()->favorites()->with('post')->get();

        return view('admin.favorites.index', compact('favorites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    } 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userId = auth()->user()->id;
        $itemId = $request->input('item_id');
    
        // Verificar si ya existe una fila con esta combinación de usuario y artículo
        $favorite = Favorite::where('user_id', $userId)->where('item_id', $itemId)->first();
    
        if ($favorite) {
            // Si ya existe, eliminarlo
            $favorite->delete();
            return redirect()->back()->with('info', 'El elemento se eliminó de tus favoritos.');
        } else {
            // Si no existe, crear una nueva fila
            $item = Post::find($itemId);
    
            if ($item) {
                $favorite = new Favorite();
                $favorite->user_id = $userId;
                $favorite->item_id = $itemId;
                $favorite->name = $item->name;
                $favorite->description = $item->body;
                $favorite->image_url = $item->images->url;
                $favorite->category_id = $item->category_id;
                $favorite->rating = $item->rating;
                $favorite->notes = $item->extract;
                $favorite->save();
    
                return redirect()->back()->with('info', 'El elemento se agregó a tus favoritos.');
            } else {
                return redirect()->back()->with('info', 'El elemento no existe.');
            }
        }
    }
    
    
    
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function show(Favorite $favorite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function edit(Favorite $favorite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Favorite $favorite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Favorite $favorite)
    {
        $favorite->delete();
    
        return redirect()->back()->with('info', 'El elemento se eliminó de tus favoritos.');
    }
    
}

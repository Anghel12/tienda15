<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Tag;
use App\Http\Requests\PostRequest;
use App\Models\Brand;
use App\Models\Image;
use App\Models\Post;
use App\Models\Price;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Cache;


class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.posts.index')->only('index');
        $this->middleware('can:admin.posts.create')->only('create', 'store');
        $this->middleware('can:admin.posts.edit')->only('edit', 'update');
        $this->middleware('can:admin.posts.destroy')->only('destroy'); 
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::pluck('title', 'id');
        $categories = Category::pluck('name', 'id');
        $tags = Tag::all();
        return view('admin.posts.create', compact('categories', 'tags', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
{
    // Crear el post
    $post = Post::create($request->all());
    
    // Obtener el ID del usuario que está creando el post
    $userId = auth()->id();
    
    // Manejar la subida de imágenes
    if ($request->hasFile('files')) {
        foreach ($request->file('files') as $file) {
            $url = Storage::put('public/posts', $file);

            // Crear una nueva entrada en la tabla de imágenes
            $image = new Image([
                'url' => $url,
                'created_by' => $userId,
            ]);

            // Guardar la imagen y asociarla con el post
            $post->images()->save($image);
        }
    }

    // Manejar las etiquetas asociadas al post
    if ($request->tags) {
        $post->tags()->attach($request->tags);
    }

    // Limpiar la caché
    Cache::flush();

    // Redireccionar a la página de índice de posts
    return redirect()->route('admin.posts.index')->with('info', 'El post se creó con éxito');
}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $this->authorize('author', $post);

        $brands = Brand::pluck('title', 'id');
        $categories = Category::pluck('name', 'id');
        $tags = Tag::all();
        return view('admin.posts.edit', compact('post', 'categories', 'tags', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {
        // Verificar si el usuario tiene permiso para editar el post
        $this->authorize('author', $post);
    
        // Actualizar los datos del post
        $post->update($request->all());
        $userId = auth()->id();
        // Manejar la subida de imágenes
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $url = Storage::put('public/posts', $file);
               
                // Verificar si el post tiene imágenes asociadas
                if ($post->images->count() > 0) {
                    // Si hay imágenes asociadas, eliminar las anteriores y crear nuevas
                    foreach ($post->images as $image) {
                        Storage::delete($image->url);
                        $image->update([
                            'url' => $url,
                            'created_by' => $userId,
                        ]);
                    }
                } else {
                    // Si no hay imágenes asociadas, crear una nueva entrada
                    $post->images()->create([
                        'url' => $url
                    ]);
                }
            }
        }
    
        // Actualizar las etiquetas asociadas al post
        if ($request->tags) {
            $post->tags()->sync($request->tags);
        }
    
        // Refrescar la caché del post
        Cache::flush();
    
        // Redireccionar a la página de índice de posts con un mensaje de éxito
        return redirect()->route('admin.posts.index')->with('info', 'El post se actualizó con éxito');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $this->authorize('author', $post);
        $post->delete();

        /* refrescar la cache del post */
        Cache::flush();
        
        return redirect()->route('admin.posts.index', $post)->with('info', 'El post se Elimino con exito');
    }
}

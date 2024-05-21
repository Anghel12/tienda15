<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeBaner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeBanerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = HomeBaner::all();

        return view('admin.HomeBaners.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.HomeBaners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'titulo' => 'required|string|max:255',
            'extract' => 'required|string|max:255',
            'cursos' => 'nullable|integer',
            'articulos' => 'nullable|integer',
            'users' => 'nullable|integer',
            'coins' => 'nullable|integer',
            'activo' => 'nullable|boolean',
            'posicion' => 'nullable|string|max:255',
            'tipo' => 'nullable|string|max:255',
            'enlace' => 'nullable|string|max:255',
        ]);

        // Crear un nuevo registro de banner en la base de datos
        $banner = new HomeBaner();
        $banner->titulo = $request->input('titulo');
        $banner->extract = $request->input('extract');
        $banner->cursos = $request->input('cursos');
        $banner->articulos = $request->input('articulos');
        $banner->users = $request->input('users');
        $banner->coins = $request->input('coins');
        $banner->user_id = auth()->id(); // Asignar el ID del usuario autenticado como creador del banner
        $banner->activo = $request->input('activo', true); // Establecer el valor predeterminado como true
        $banner->posicion = $request->input('posicion');
        $banner->tipo = $request->input('tipo');
        $banner->enlace = $request->input('enlace');
        $banner->save();


         if ($request->hasFile('imagenes')) {
            foreach ($request->file('imagenes') as $imagen) {
    
            $url = $imagen->store('public/posts'); // Guardar la imagen en el servidor
    
            $banner->images()->create([
                'url' => $url
            ]);
        
            }
        }

        // Redirigir a la vista de index de banners con un mensaje de éxito
        return redirect()->route('admin.HomeBaners.index')->with('info', 'El banner ha sido creado con éxito.');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeBaner  $homeBaner
     * @return \Illuminate\Http\Response
     */
    public function show(HomeBaner $homeBaner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeBaner  $homeBaner
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeBaner $request)
    {
         // Validar los datos del formulario
        $request->validate([
            'titulo' => 'required|string|max:255',
            'extract' => 'required|string|max:255',
            'cursos' => 'nullable|integer',
            'articulos' => 'nullable|integer',
            'users' => 'nullable|integer',
            'coins' => 'nullable|integer',
            'activo' => 'nullable|boolean',
            'posicion' => 'nullable|string|max:255',
            'tipo' => 'nullable|string|max:255',
            'enlace' => 'nullable|string|max:255',
        ]);

        // Crear un nuevo registro de banner en la base de datos
        $banner = new HomeBaner();
        $banner->titulo = $request->input('titulo');
        $banner->extract = $request->input('extract');
        $banner->cursos = $request->input('cursos');
        $banner->articulos = $request->input('articulos');
        $banner->users = $request->input('users');
        $banner->coins = $request->input('coins');
        $banner->user_id = auth()->id(); // Asignar el ID del usuario autenticado como creador del banner
        $banner->activo = $request->input('activo', true); // Establecer el valor predeterminado como true
        $banner->posicion = $request->input('posicion');
        $banner->tipo = $request->input('tipo');
        $banner->enlace = $request->input('enlace');
        $banner->save();


         if ($request->hasFile('imagenes')) {
            foreach ($request->file('imagenes') as $imagen) {
    
            $url = $imagen->store('public/posts'); // Guardar la imagen en el servidor
    
            $banner->images()->create([
                'url' => $url
            ]);
        
            }
        }

        // Redirigir a la vista de index de banners con un mensaje de éxito
        return redirect()->route('admin.HomeBaners.index')->with('info', 'El banner ha sido creado con éxito.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeBaner  $homeBaner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeBaner $homeBaner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeBaner  $homeBaner
     * @return \Illuminate\Http\Response
     */
    public function destroy($banner)
    {
        // Encontrar la imagen de banner en la base de datos
        $banner = HomeBaner::findOrFail($banner);

        // Eliminar la imagen de banner de la base de datos
        $banner->delete();
    
        // Redireccionar de vuelta a la página de inicio del administrador
        return redirect()->route('admin.HomeBaners.index')->with('info', 'Banner eliminado exitosamente.');
    }
}

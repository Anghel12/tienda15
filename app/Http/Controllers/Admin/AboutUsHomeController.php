<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutUsHome;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;

class AboutUsHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $aboutUsHomes = AboutUsHome::all();
        return view('admin.about_us_homes.index', compact('aboutUsHomes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about_us_homes.create');
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
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validar la imagen
        ]);

        // Crear la entrada de "Sobre Nosotros"
        $aboutUsHome = AboutUsHome::create($validatedData);

        // Subir la imagen si se proporcionó
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images'); // Guardar la imagen en storage/app/images

            // Crear una nueva instancia de Image y asociarla con la entrada de "Sobre Nosotros"
            $image = new Image(['url' => $imagePath]);
            $aboutUsHome->image()->save($image);
        }

        return redirect()->route('admin.about_us_homes.index')->with('success', 'La entrada de "Sobre Nosotros" ha sido creada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aboutUsHome = AboutUsHome::findOrFail($id);
        return view('admin.about_us_homes.show', compact('aboutUsHome'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aboutUsHome = AboutUsHome::findOrFail($id);
        return view('admin.about_us_homes.edit', compact('aboutUsHome'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validar la imagen
        ]);

        // Encontrar la entrada de "Sobre Nosotros" a actualizar
        $aboutUsHome = AboutUsHome::findOrFail($id);

        // Actualizar los datos de la entrada de "Sobre Nosotros"
        $aboutUsHome->update($validatedData);

        // Actualizar la imagen si se proporcionó
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images'); // Guardar la imagen en storage/app/images

            // Si ya existe una imagen asociada, eliminarla antes de guardar la nueva
            if ($aboutUsHome->image) {
                Storage::delete($aboutUsHome->image->url); // Eliminar la imagen anterior del almacenamiento
                $aboutUsHome->image->delete(); // Eliminar la entrada de imagen anterior de la base de datos
            }

            // Crear una nueva instancia de Image y asociarla con la entrada de "Sobre Nosotros"
            $image = new Image(['url' => $imagePath]);
            $aboutUsHome->image()->save($image);
        }

        return redirect()->route('admin.about_us_homes.index')->with('success', 'La entrada de "Sobre Nosotros" ha sido actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aboutUsHome = AboutUsHome::findOrFail($id);
        $aboutUsHome->delete();

        return redirect()->route('admin.about_us_homes.index')->with('success', 'La entrada de "Sobre Nosotros" ha sido eliminada correctamente.');
    }
}

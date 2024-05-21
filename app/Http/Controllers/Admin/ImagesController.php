<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ImagesController extends Controller
{
    public function index()
    {
        $imagenes = Image::all();
    
        return view('admin.images.index', compact('imagenes'));
    }
    
    public function upload(Request $request)
    {
        // Validar la solicitud y asegurarse de que se haya enviado una imagen
        $request->validate([
            'upload' => 'required|image'
        ]);

        // Obtener el archivo de imagen de la solicitud
        $imageFile = $request->file('upload');

        // Mover el archivo de imagen a la ubicación deseada (por ejemplo, la carpeta "public/posts")
        $path = $imageFile->store('posts', 'public');

        // Verificar el contenido de $path
        dd($path);

        // ...
    }
    

}

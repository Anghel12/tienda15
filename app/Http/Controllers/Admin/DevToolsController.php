<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DevTools;
use Illuminate\Http\Request;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\File;


class DevToolsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $files = new Filesystem;

    //Obtener una colección de nombres de modelos
    $models = collect(File::glob(app_path('Models/*.php')))
        ->map(function ($path) {
            return class_basename($path, '.php');
        })
        ->all();

    //Obtener una colección de nombres de controladores con su fecha de creación
    $controllers = collect(File::glob(app_path('Http/Controllers/*Controller.php')))
        ->map(function ($path) {
            return [
                'name' => class_basename($path, '.php'),
                'created_at' => File::lastModified($path)
            ];
        })
        ->all();

    //Devolver la vista con los datos recopilados
    return view('admin.DevTools.index', compact('models', 'controllers'));
}

    
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.DevTools.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DevTools  $devTools
     * @return \Illuminate\Http\Response
     */
    public function show($model)
    {
        return view('admin.DevTools.create', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DevTools  $devTools
     * @return \Illuminate\Http\Response
     */
    public function edit(DevTools $devTools)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DevTools  $devTools
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DevTools $devTools)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DevTools  $devTools
     * @return \Illuminate\Http\Response
     */
    public function destroy(DevTools $devTools)
    {
        //
    }
}

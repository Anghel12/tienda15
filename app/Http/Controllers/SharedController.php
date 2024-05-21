<?php

namespace App\Http\Controllers;

use App\Models\Shared;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SharedController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.Shareds.index')->only('index');
        $this->middleware('can:admin.Shareds.create')->only('create', 'store');
        $this->middleware('can:admin.Shareds.edit')->only('edit', 'update');
        $this->middleware('can:admin.Shareds.destroy')->only('destroy'); 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shareds = Shared::all();
       return view('admin.Shareds.index', compact('shareds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Shareds.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'plataforma' => 'required|string',
            'url' => 'nullable|string|max:255',
            'etiquetas' => 'nullable|string|max:255',
            'tipo' => 'nullable|string|max:255',
        ]);
    
        $user_id = Auth::id();
    
        $shared = new Shared();
        $shared->titulo = $validatedData['titulo'];
        $shared->descripcion = $validatedData['descripcion'];
        $shared->plataforma = $validatedData['plataforma'];
        $shared->url = $validatedData['url'];
        $shared->etiquetas = $validatedData['etiquetas'];
        $shared->tipo = $validatedData['tipo'];
        $shared->user_id = $user_id;
        $shared->save();
    
        return redirect()->route('shareds.index')
                         ->with('info', 'El registro se ha creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shared  $shared
     * @return \Illuminate\Http\Response
     */
    public function show(Shared $shared)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shared  $shared
     * @return \Illuminate\Http\Response
     */
    public function edit(Shared $shared)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shared  $shared
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shared $shared)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shared  $shared
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shared $shared)
    {
        //
    }
}

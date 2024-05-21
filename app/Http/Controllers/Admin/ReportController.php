<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeBaner;
use App\Models\Image;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;



class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.reports.index')->only('index');
        $this->middleware('can:admin.reports.create')->only('create', 'store');
        $this->middleware('can:admin.reports.edit')->only('edit', 'update');
        $this->middleware('can:admin.reports.destroy')->only('destroy'); 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = Report::all(); 
        return view('admin.reports.index', compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.reports.create');
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
        'titulo' => 'required|max:255',
        'area' => 'required|max:255',
        'detalles' => 'required',
        'imagenes.*' => 'image|max:2048', // Validar que sean imágenes y que no superen los 2 MB
    ]);

    // Crear el reporte
    $reporte = new Report([
        'titulo' => $request->input('titulo'),
        'area' => $request->input('area'),
        'detalles' => $request->input('detalles'),
        'created_by' => auth()->id(), // Asignar el usuario autenticado como creador del reporte
    ]);
    $reporte->save();

    // Guardar las imágenes asociadas al reporte
    if ($request->hasFile('imagenes')) {
        foreach ($request->file('imagenes') as $imagen) {

        $url = $imagen->store('public/posts'); // Guardar la imagen en el servidor

        $reporte->images()->create([
            'url' => $url
        ]);
    
        }
    }


    // Redirigir a la página de inicio con un mensaje de éxito
    return redirect()->route('posts.index')->with('success', 'El reporte se ha creado exitosamente.');
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        // Verificar si el usuario autenticado puede eliminar el reporte
     /*    if (!Auth::user()->can('delete', $report)) {
            abort(403);
        } */
    
        // Eliminar las imágenes asociadas al reporte
/*         $report->images()->delete();
     */
        // Eliminar el reporte
        $report->delete();
        // Redireccionar al index de los reportes
        return redirect()->route('admin.reports.index')->with('info', 'El reporte se ha ELMINADO exitosamente.');
    }
    
    
}

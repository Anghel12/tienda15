<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Configuracion;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configuracion_homes = Configuracion::all();
        return view('admin.footers.index', compact('configuracion_homes'));
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
        //
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
    public function edit(Configuracion $footer)
    {
        
        return view('admin.footers.edit', compact('footer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Configuracion $footer)
    {

        $request->validate([
            'title' => 'required|max:20',
            'descripcion' => 'required|max:200',
            'title1' => 'required|max:60',
            'title2' => 'max:60',
            'title3' => 'max:60',
            'title4' => 'max:60',
            
        ]);

        $footer->update($request->all());

       if ($request->otherpagable) {

            $footer->otherpagable()->create([
                'titulo' => $request->otherpagable_titulo,
                'url' => $request->otherpagable_url
            ]);
        } 

        return redirect()->route('admin.footers.index', $footer)->with('info', 'FOOTER SE ACTUALIZO CORRECTAMENTE' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

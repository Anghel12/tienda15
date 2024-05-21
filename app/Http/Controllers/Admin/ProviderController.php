<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Provider;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.providers.index')->only('index');
        $this->middleware('can:admin.providers.create')->only('create', 'store');
        $this->middleware('can:admin.providers.edit')->only('edit', 'update');
        $this->middleware('can:admin.providers.destroy')->only('destroy'); 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $providers = Provider::all();
        return view('admin.providers.index', compact('providers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provider = Provider::all();
        return view('admin.providers.create', compact('provider'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $provider = Provider::create($request->all());

        $provider->replicate([
            'title' => 'max:50',
            'extract' => 'max:200',
            'phone' => 'max:9',
        ]);
       

        return redirect()->route('admin.providers.index')->with('info', 'EL PROVEEDOR SE CREO CON EXITO');
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
    public function edit(Provider $provider)
    {
        return view('admin.providers.edit', compact('provider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Provider $provider)
    {
        $provider->update($request->all());
        $request->validate([
            'title' => 'max:100',
            'extract' => 'max:200',
            'phone' => 'max:9',
        ]);

        return redirect()->route('admin.providers.index')->with('info', 'EL PROVEEDOR SE ACTUALIZO CON EXITO');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Provider $provider)
    {
        $provider->delete();

        return redirect()->route('admin.providers.index')->with('info', 'EL PROVEEDOR SE ELMINO CON EXITO');
    
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PostYoutube;
use Illuminate\Http\Request;

class PostYoutubeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postyoutubes = PostYoutube::all();
        return view('admin.postyoutubes.index', compact('postyoutubes'));
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
    public function edit(PostYoutube $postyoutube)
    {
        return view('admin.postyoutubes.edit', compact('postyoutube'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostYoutube $postyoutube)
    {
        $postyoutube->update($request->all());

        $request->validate([
            'Name' => 'max:20',
            'extract' => 'max:200',
            'body' => 'max:200',
            'price' => 'max:9',
            
        ]);
        

        return redirect()->route('admin.postyoutubes.index', $postyoutube)->with('info', 'El post banner se actualizo con exito' );
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

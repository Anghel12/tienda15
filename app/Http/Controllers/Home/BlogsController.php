<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use App\Models\Configuracion;
use App\Models\Post;
use App\Models\Slider;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configuracion_homes = Configuracion::all();
        $blogs = Blogs::all();
        $sliders = Slider::all();
        return view('home.blogs.indexblog', compact('blogs', 'sliders', 'configuracion_homes'));
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
     * @param  \App\Models\blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function show(Post $blog)
    {

        return view('home.blogs.showblog', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function edit(Blogs $blogs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blogs $blogs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\blogs  $blogs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blogs $blogs)
    {
        //
    }
}

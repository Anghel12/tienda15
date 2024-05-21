<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
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
        $blogs = Blogs::all();
        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogs.create');
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
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        Blogs::create($validatedData);

        return redirect()->route('admin.blogs.index')->with('success', 'El blog ha sido creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blogs $blogs)
    {
        return view('admin.blogs.show', compact('blogs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blogs $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blogs $blogs)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $blogs->update($validatedData);

        return redirect()->route('admin.blogs.index')->with('success', 'El blog ha sido actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blogs $blogs)
    {
        $blogs->delete();

        return redirect()->route('admin.blogs.index')->with('success', 'El blog ha sido eliminado correctamente.');
    }
}

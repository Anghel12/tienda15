<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Term;
use Illuminate\Http\Request;

class TermController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.Terms.index')->only('index');
      /*   $this->middleware('can:admin.Terms.create')->only('create', 'store');
        $this->middleware('can:admin.Terms.edit')->only('edit', 'update'); */
        $this->middleware('can:admin.Terms.destroy')->only('destroy'); 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      /*   $terms = Term::latest()->firstOrFail(); */
        $terms = Term::All();
        return view('admin.Terms.index', compact('terms'));
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
     * @param  \App\Models\Term  $term
     * @return \Illuminate\Http\Response
     */
    public function show(Term $term)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Term  $term
     * @return \Illuminate\Http\Response
     */
    public function edit(Term $term)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Term  $term
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Term $term)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Term  $term
     * @return \Illuminate\Http\Response
     */
    public function destroy(Term $term)
    {
        $term->delete();

        return redirect()->route('terms.index');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeContact;
use Illuminate\Http\Request;

class HomeContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.HomeContact.index');
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
     * @param  \App\Models\HomeContact  $homeContact
     * @return \Illuminate\Http\Response
     */
    public function show(HomeContact $homeContact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeContact  $homeContact
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeContact $homeContact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeContact  $homeContact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeContact $homeContact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeContact  $homeContact
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeContact $homeContact)
    {
        //
    }
}

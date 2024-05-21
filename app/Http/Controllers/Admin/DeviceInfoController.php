<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DeviceInfo;
use Illuminate\Http\Request;

class DeviceInfoController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:admin.deviceInfos.index')->only('index');
   /*      $this->middleware('can:admin.posts.create')->only('create', 'store');
        $this->middleware('can:admin.posts.edit')->only('edit', 'update');
        $this->middleware('can:admin.posts.destroy')->only('destroy');  */
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deviceInfos = DeviceInfo::all();
        return view('admin.deviceInfos.index', compact('deviceInfos'));
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
     * @param  \App\Models\DeviceInfo  $deviceInfo
     * @return \Illuminate\Http\Response
     */
    public function show(DeviceInfo $deviceInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DeviceInfo  $deviceInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(DeviceInfo $deviceInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DeviceInfo  $deviceInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DeviceInfo $deviceInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DeviceInfo  $deviceInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeviceInfo $deviceInfo)
    {
        //
    }
}

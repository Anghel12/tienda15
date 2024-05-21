<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Image as ModelsImage;
use App\Models\navbarConfig;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


use Illuminate\Support\Str;

class sliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        $navbarcong = navbarConfig::all();

       return view('admin.sliders.index', compact('sliders', 'navbarcong'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
          $request->validate([
            'title' => 'required|max:20',
            'body' => 'required|max:40',
            'file' => 'required|mimage:max:2048'
            
        ]);

       $slider = Slider::create($request->all());

       if ($request->file('file')) {

          $url = Storage::put('public/posts', $request->file('file'));

          $slider->image()->create([
               'url' => $url
          ]);
       }
       
       return redirect()->route('admin.sliders.index', $slider)->with('info', 'El slider se creo con exito' );

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
     * 
     */
    
    public function edit(Slider $slider)
    {
         return view('admin.sliders.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {

        $request->validate([
            'title' => 'required|max:20',
            'body' => 'required|max:40',
            'file' => 'image:max:2048'
            
        ]);
        
        $slider->update($request->all());

        if ($request->file('file')) {
            $url = Storage::put('public/posts', $request->file('file'));

            if ($slider->image) {
                Storage::delete($slider->image->url);
                $slider->image->update([
                    'url' => $url
                ]);

            }else {
                $slider->image()->create([
                    'url' => $url
                ]);
            }
        }
        return redirect()->route('admin.sliders.index', $slider)->with('info', 'El post se actualizo con exito' );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();

        return redirect()->route('admin.sliders.index', $slider)->with('info', 'El post se Elimino con exito');
    }
}

<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blogs;
use App\Models\Slider;

class BancoHomeController extends Controller
{

    public function index()
    {
        $blogs = Blogs::all();
        $sliders = Slider::all();
        return view('home.banco.indexbanco', compact('blogs', 'sliders'));
    }

}

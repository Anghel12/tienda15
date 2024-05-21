<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coin;
use Illuminate\Http\Request;

class CoinConfigController extends Controller 
{
    public function index()
    {
        $coins = Coin::all();
        return view('admin.coinsConfig.index', compact('coins') );
    }
}

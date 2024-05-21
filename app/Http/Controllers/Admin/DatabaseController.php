<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


class DatabaseController extends Controller
{
    public function index() {
        $tablas = collect(DB::select('SHOW TABLES'))->pluck('Tables_in_tienda');

        return view('admin.database.index', ['tablas' => $tablas]); //Pasando los nombres de las tablas a la vista
    }
}

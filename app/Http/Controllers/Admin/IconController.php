<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IconController extends Controller
{
    public function index()
    {
            // Obtener la lista de iconos de Bootstrap
    /*     $icons = json_decode(file_get_contents(base_path('node_modules/bootstrap-icons/icons.json')), true);

        $icons = array_keys($icons);
 */
        return view('admin.icons.index');

    }
}

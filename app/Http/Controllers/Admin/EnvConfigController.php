<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class EnvConfigController extends Controller
{
    public function index()
    {
        $envVariables = [];

        // Lee el archivo .env
        $envFile = file_get_contents(base_path('.env'));

        // Divide el archivo por líneas y guarda las variables de entorno en un arreglo
        foreach (explode("\n", $envFile) as $envLine) {
            $envLine = trim($envLine);

            if (empty($envLine) || strpos($envLine, '#') === 0) {
                continue;
            }

            [$key, $value] = explode('=', $envLine, 2);
            $envVariables[$key] = $value;
        }

        return view('admin.envconfig.index', ['envVariables' => $envVariables]);
    }

    public function create()
    {
        return view('admin.envconfig.create');
    }

    public function store(Request $request)
    {
        // Obtiene el nombre y el valor de la variable de entorno del formulario
        $envName = $request->input('name');
        $envValue = $request->input('value');

        // Actualiza el archivo .env
        $envFile = file_get_contents(base_path('.env'));
        $envFile .= "\n" . "$envName=$envValue";
        file_put_contents(base_path('.env'), $envFile);

        return redirect()->route('admin.envconfig.index')->with('success', 'La variable de entorno se ha creado exitosamente.');
    }

}

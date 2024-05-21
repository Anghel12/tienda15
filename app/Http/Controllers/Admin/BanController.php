<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ban;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BanController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.bans.index')->only('index');
        $this->middleware('can:admin.bans.create')->only('create', 'store');
        $this->middleware('can:admin.bans.edit')->only('edit', 'update');
        $this->middleware('can:admin.bans.destroy')->only('destroy'); 
    }

    public function index()
    {
        $bans = Ban::all();
        return view('admin.bans.index', compact('bans'));
    }

    public function create()
{
    $users = User::all(); // Obtener todos los usuarios
    return view('admin.bans.create', compact('users')); // Mostrar la vista con la lista de usuarios
}

public function edit(Ban $ban)
{
    return view('admin.bans.edit', compact('ban'));
}


public function update(Request $request, $id)
{
    $ban = Ban::findOrFail($id);

    $ban->type = $request->type ?? 'ip'; // Si no se especifica el tipo, se utiliza "ip" como valor por defecto
    $ban->reason = $request->reason;
    $ban->expires_at = $request->expires_at;
    $ban->is_active = $request->has('is_active');
    
    $ban->save();

    return redirect()->route('admin.bans.index')->with('info', 'El baneo ha sido actualizado correctamente');
}

public function desbaneo(Request $request, $id)
{
    $ban = Ban::findOrFail($id);

    $ban->type = $request->type ?? 'ip'; // Si no se especifica el tipo, se utiliza "ip" como valor por defecto
    $ban->reason = $request->reason;
    $ban->expires_at = $request->expires_at;

    if ($request->has('unban')) {
        $ban->is_active = false;
        $ban->save();
        return redirect()->route('admin.bans.index')->with('info', 'El usuario ha sido desbaneado correctamente.');
    } else {
        $ban->is_active = true;
        $ban->save();
        return redirect()->route('admin.bans.index')->with('info', 'El usuario ha sido baneado correctamente.');
    }
}




public function store(Request $request)
{
    // Validar los datos del formulario
    $request->validate([
        'type' => 'required',
        'reason' => 'nullable|string|max:255',
        'user_id' => 'nullable|exists:users,id',
        'ip_address' => 'nullable|ip',
        'country_code' => 'nullable|string|max:2',
    ]);

    $ip_address = $request->getClientIp();

    // Obtener el código de país del usuario a través de su dirección IP
/*     $location = Location::get($ip_address);
    $country_code = $location->countryCode; */ //utilizar la librería geoip2

    // Crear un nuevo modelo Ban con los datos recibidos del formulario
    $ban = new Ban;
    $ban->type = $request->type;
    $ban->reason = $request->reason;
    $ban->user_id = $request->user_id;
    $ban->ip_address = $ip_address;

    // Si se estableció una fecha de expiración, se guarda en la base de datos
/*     if ($request->filled('expires_at')) {
        $expires_at = Carbon::createFromFormat('Y-m-d', $request->input('expires_at'));
        $ban->expires_at = $expires_at;
    } */

    // Si el ban está activo, se guarda como tal en la base de datos
    if ($request->filled('is_active')) {
        $ban->is_active = true;
    }

    // Se guarda el usuario que realizó el ban en la base de datos
    $ban->banned_by = Auth::user()->id;

    // Guardar el modelo en la base de datos
    $ban->save();

    // Redirigir al usuario a la lista de baneos con un mensaje de éxito
    return redirect()->route('admin.bans.index')->with('info', 'El baneo se ha creado correctamente.');
}

public function show(Ban $ban)
{
    return view('admin.bans.show', compact('ban'));
}


public function destroy(Ban $ban)
{
    $ban->delete();
    return redirect()->route('admin.bans.index')->with('info', 'Ban eliminado exitosamente');
}


}

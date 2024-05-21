<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeHelp;
use Illuminate\Validation\Rule;

class HomeHelpController extends Controller
{
    public function index()
    {
        $home_helps = HomeHelp::all();
        return view('admin.home_helps.index', compact('home_helps'));
    }

    public function create()
    {
        return view('admin.home_helps.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);
    
        // Obtén el ID del usuario autenticado
        $user_id = auth()->id();
    
        // Crea un nuevo registro de HomeHelp con los datos validados y el user_id asociado
        $homeHelp = HomeHelp::create([
            'title' => $validatedData['title'],
            'body' => $validatedData['body'],
            'user_id' => $user_id,
        ]);
    
        return redirect()->route('admin.home_helps.index')->with('success', 'Tu help ha sido actualizada correctamente');
    }

    public function show(HomeHelp $home_help)
    {
        return view('admin.home_helps.show', compact('home_help'));
    }

    public function edit(HomeHelp $home_help)
    {
        return view('admin.home_helps.edit', compact('home_help'));
    }

    public function update(Request $request, HomeHelp $home_help)
    {
        $home_help->update($request->all());
        return redirect()->route('admin.home_helps.index')->with('success', 'Tu helps ha sido actualizada correctamente');
    }

    public function destroy(HomeHelp $home_help)
    {
        $home_help->delete();
        return redirect()->route('admin.home_helps.index')->with('success', 'Tu helps ha sido Eliminado correctamente');
    }
}

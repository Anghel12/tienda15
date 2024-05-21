<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MensajesController extends Controller
{

    /* enviar mensajes en masa */
    public function index()
    {
        $users = User::all();
        return view('admin.messages.index', compact('users'));
    }

    public function create(Request $request)
    {
        $users = User::all();

        // Si el usuario ha hecho clic en "Enviar mensaje a todos"
        if ($request->has('all')) {
            return view('admin.messages.create_all', compact('users'));
        }

        // Si el usuario ha seleccionado un usuario específico
        if ($request->has('user_id')) {
            $user = User::find($request->input('user_id'));
            return view('admin.messages.create_user', compact('user'));
        }

        // Si no se ha seleccionado ningún usuario o "Enviar mensaje a todos"
        return redirect()->route('admin.messages.index')->with('info', 'Por favor seleccione un usuario o la opción "Enviar mensaje a todos".');
    }
    

    public function store(Request $request)
    {
        $asunto = $request->input('asunto');
        $contenido = $request->input('contenido');

        if ($request->input('destinatarios') == 'todos') {
            $usuarios = User::all();

            foreach ($usuarios as $usuario) {
                $mensaje = new Message();
                $mensaje->asunto = $asunto;
                $mensaje->contenido = $contenido;
                $mensaje->destinatario = $usuario->email;
                $mensaje->save();

                Mail::to($usuario->email)->send(new MensajeEnviado($mensaje));
            }
        } else {
            $destinatario = $request->input('destinatario');

            $mensaje = new Message();
            $mensaje->asunto = $asunto;
            $mensaje->contenido = $contenido;
            $mensaje->destinatario = $destinatario;
            $mensaje->save();

            Mail::to($destinatario)->send(new MensajeEnviado($mensaje));
        }

        return redirect()->route('admin.menssages.index')->with('success', 'Mensaje enviado correctamente');
    }

    
    
/* Enviar mensaje a un unico usuario  */
public function enviarMensaje(Request $request, $id_usuario) {
    $usuario = User::find($id_usuario);
    $mensaje = $request->input('mensaje');
    
    Mail::to($usuario->email)->send(new Mensaje($mensaje));
    
    return redirect()->back()->with('info', 'Mensaje enviado correctamente');
}


public function enviaoMensaje(Request $request)
{
    $mensaje = new Message;

    $mensaje->destinatario = $request->destinatario;
    $mensaje->asunto = $request->asunto;
    $mensaje->contenido = $request->contenido;

    $mensaje->save();

    return redirect()->back()->with('mensaje', 'Mensaje enviado correctamente.');
}
}

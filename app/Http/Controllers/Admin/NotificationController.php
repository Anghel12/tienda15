<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

use App\Notifications\MyNotification;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    /**
     * Muestra las notificaciones del usuario.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Obtén las notificaciones del usuario actual
        $notifications = Auth::user()->notifications;

        // Marca las notificaciones como leídas
        Auth::user()->unreadNotifications->markAsRead();

        // Retorna la vista de las notificaciones
        return view('admin.notifications.index', compact('notifications'));
    }

    /**
     * Envía una notificación al usuario especificado.
     *
     * @param  \App\User  $user
     * @param  string  $message
     * @return void
     */
    public function sendNotification(User $user, $message)
    {
        // Crea una nueva notificación
        $notification = new MyNotification($message);

        // Envía la notificación al usuario
        $user->notify($notification);

        // Emitir un evento Pusher para notificar al usuario en tiempo real
        $data = [
            'message' => $message,
            'link' => route('admin.notifications.index')
        ];
        event(new \App\Events\NewNotification($data));
    }
}

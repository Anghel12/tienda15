<?php

namespace App\Http\Controllers\Payments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MercadoPagoController extends Controller
{
    public function success(Request $request)
    {
        // Aquí puedes mostrar una vista con un mensaje de éxito al usuario
        return view('admin.MercadoPago.success');
    }

    public function failure(Request $request)
    {
        // Aquí puedes mostrar una vista con un mensaje de fallo al usuario
        return view('admin.MercadoPago.failure');
    }

    public function pending(Request $request)
    {
        // Aquí puedes mostrar una vista con un mensaje de pago pendiente al usuario
        return view('admin.MercadoPago.pending');
    }
}

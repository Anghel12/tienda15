<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\TrackingData;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class TrackingMiddleware
{
    protected $trackingData;

    public function __construct(TrackingData $trackingData)
    {
        $this->trackingData = $trackingData;
    }

    public function handle($request, Closure $next)
    {
        $trackingId = $request->cookie('tracking_id');
        $userId = auth()->check() ? auth()->id() : null;
        $page = $request->path();
        $action = 'Acción realizada';
        $ipAddress = $request->ip();

        if (!$trackingId) {
            $trackingId = Str::uuid()->toString();
            // Almacenar el nuevo identificador en una cookie
            cookie()->queue('tracking_id', $trackingId, 60 * 24 * 365); // 1 año de duración
        }

        $validator = Validator::make([
            'tracking_id' => $trackingId,
            'user_id' => $userId,
            'page' => $page,
            'action' => $action,
            'ip_address' => $ipAddress,
        ], [
            'tracking_id' => 'required',
            'user_id' => 'nullable|integer',
            'page' => 'required|string',
            'action' => 'required|string',
            'ip_address' => 'required|string',
        ]);

        if ($validator->fails()) {
            // Manejo de error de validación
        }

        try {
            $trackingData = new TrackingData();
            $trackingData->tracking_id = $trackingId;
            $trackingData->user_id = $userId;
            $trackingData->page = $page;
            $trackingData->action = $action;
            $trackingData->ip_address = $ipAddress;
            $trackingData->save();
        } catch (\Exception $e) {
            Log::error('Error al almacenar los datos de seguimiento: ' . $e->getMessage());
            // Manejo del error de almacenamiento
        }

        return $next($request);
    }
}

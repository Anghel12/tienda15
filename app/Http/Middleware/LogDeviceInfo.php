<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\DeviceInfo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LogDeviceInfo
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $deviceInfo = new DeviceInfo;
        $deviceInfo->user_id = Auth::id();
        $deviceInfo->ip_address = $request->ip();
        $deviceInfo->screen_resolution = $request->header('Screen-Resolution');
        $deviceInfo->browser = $request->header('User-Agent');
        $deviceInfo->operating_system = $request->header('Operating-System');
        $deviceInfo->device_type = $request->header('Device-Type');
        $deviceInfo->country = $request->header('Country');
        $deviceInfo->state = $request->header('State');
        $deviceInfo->city = $request->header('City');
        $deviceInfo->session_start = session('session_start_time');
        $deviceInfo->session_end = now();
        $deviceInfo->page_url = url()->full();

        $deviceInfo->save();

        return $next($request);
    }
}

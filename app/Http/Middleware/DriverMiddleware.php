<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class DriverMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            if (Auth::user()->role == 'driver') {
                return $next($request);
            } else {
                // Jika mencoba masuk ke halaman user dengan role yang berbeda
                session()->put('url.intended', url()->current());
                $message = [
                    "type-message" => 'error',
                    "message" => 'Anda tidak memiliki akses ke halaman ini !'
                ];
                return redirect()->back()->with($message);
            }
        }

        return redirect()->back();
    }
}

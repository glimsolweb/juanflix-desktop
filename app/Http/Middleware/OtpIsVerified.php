<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OtpIsVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Allowed user to access verify otp
        if ($request->routeIs('verify-otp')) {
            return $next($request);
        }
        $isOtpVerified = session()->get('otp_verified');

        if (!$isOtpVerified) {
            return redirect()->route('verify-otp');
        }
        return $next($request);


    }
}

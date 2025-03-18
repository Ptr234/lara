<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SecurityHeaders
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // ✅ Fix CSP issues
        $response->headers->set('Content-Security-Policy', 
        "font-src 'self' https://fonts.googleapis.com https://fonts.gstatic.com; " .
        "style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; " .
        "script-src 'self' 'unsafe-inline'"
);

        // ✅ Fix font issues
        $response->headers->set('Access-Control-Allow-Origin', '*');

        // ✅ X-Frame-Options (prevent clickjacking)
        $response->headers->set('X-Frame-Options', 'DENY');

        // ✅ Prevent MIME-type sniffing
        $response->headers->set('X-Content-Type-Options', 'nosniff');

        // ✅ Prevent cross-site scripting attacks
        $response->headers->set('X-XSS-Protection', '1; mode=block');

        // ✅ Enforce HTTPS security
        $response->headers->set('Strict-Transport-Security', 'max-age=31536000; includeSubDomains; preload');

        // ✅ Privacy protection (Referrer Policy)
        $response->headers->set('Referrer-Policy', 'strict-origin-when-cross-origin');

        // ✅ Disable permissions for geolocation, microphone, camera
        $response->headers->set('Permissions-Policy', 'geolocation=(), microphone=(), camera=()');

        return $response;
    }
}
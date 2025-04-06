<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CorsMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);
        
        // Set CORS headers
        $response->headers->set('Access-Control-Allow-Origin', '*'); // Allow any domain to access
        $response->headers->set('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
        $response->headers->set('Access-Control-Allow-Headers', 'Origin, Content-Type, X-Auth-Token');
        
        // Allow preflight requests
        if ($request->getMethod() == "OPTIONS") {
            return response()->json([], 200);
        }

        return $response;
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
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
        // Validasi token pada query string
        $adminToken = $request->query('admin_token');
        
        // Token yang valid
        $validToken = 'secure_admin_token123';

        // Jika token tidak valid, tampilkan error
        if ($adminToken !== $validToken) {
            abort(403, 'Unauthorized access');
        }
        
        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Controle als de gebruiker een admin is
        if ($request->user() && $request->user()->is_admin) {
            return $next($request);
        }

        // Melding die wordt weergegeven als de gebruiker geen admin is
        abort(403, 'Unauthorized action.');
    }
}

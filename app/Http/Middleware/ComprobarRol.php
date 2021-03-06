<?php

namespace App\Http\Middleware;

use Closure;

class ComprobarRol
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->user()->tokenCan('Usuario'))
        {
            abort(403, "Identificate intruso");
        }
        return $next($request);
    }
}

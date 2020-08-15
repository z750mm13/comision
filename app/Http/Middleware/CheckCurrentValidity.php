<?php

namespace App\Http\Middleware;

use Closure;
use Tools\Query\Reviews;

class CheckCurrentValidity {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        if ( Reviews::getCurrentValidity() ) {
            return $next($request);
        }
        abort(403, "No tienes autorización para ingresar.");
    }
}

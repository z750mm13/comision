<?php

namespace App\Http\Middleware;

use Closure;
use Tools\Query\Exams;

class CheckCurrentEvaluation {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        if ( Exams::getCurrentEvaluation() ) {
            return $next($request);
        }
        abort(403, "No tienes autorización para ingresar.");
    }
}

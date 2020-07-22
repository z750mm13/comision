<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Validator;
use Closure;

class ValidateUniqueElement
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        Validator::make($request->all(), [
            'nombre'=>['unique:users,nombre,NULL,NULL,apellidos,'.$request['apellidos'],],
        ])->validate();
        return $next($request);
    }
}

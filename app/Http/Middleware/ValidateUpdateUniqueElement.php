<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Validator;
use Closure;

class ValidateUpdateUniqueElement
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
        /**
         * Valida que el cambio de nombre no exista y ademas
         * si es propietario del nombre no marca la validación
         */
        Validator::make($request->all(), [
            'nombre'=>['unique:users,nombre,'.$request->route('element').',id,apellidos,'.$request['apellidos'],],
        ])->validate();

        return $next($request);
    }
}

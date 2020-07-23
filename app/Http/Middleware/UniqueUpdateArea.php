<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Validator;
use Closure;

class UniqueUpdateArea
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
            'nombre'=>['unique:areas,nombre,'.$request->route('area').',id,area,'.$request['area'],],
        ])->validate();
        return $next($request);
    }
}

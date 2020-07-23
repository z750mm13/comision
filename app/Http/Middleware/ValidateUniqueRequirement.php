<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Validator;
use Closure;

class ValidateUniqueRequirement {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        Validator::make($request->all(), [
            'numero'=>['unique:requirements,numero,NULL,NULL,norm_id,'.$request['norm_id'],],
        ])->validate();

        return $next($request);
    }
}

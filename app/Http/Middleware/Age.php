<?php

namespace App\Http\Middleware;

use Closure;

class Age
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
        // $request->age (params)
        if($request->age < 17) {
            return redirect('/fail');
        }
        return $next($request);
    }
}

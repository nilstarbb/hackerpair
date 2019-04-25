<?php

namespace Hackerpair\Http\Middleware;

use Closure;

class AdminAuthentication
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
        if ($request->user()) {
            if ($request->user()->is_admin == true) {
                return $next($request);
            }
        }
        return redirect()->route('index');
    }
}

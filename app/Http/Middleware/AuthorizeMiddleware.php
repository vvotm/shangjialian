<?php

namespace App\Http\Middleware;

use Closure;

class AuthorizeMiddleware
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
        $session = $request -> getSession();

        if($user = $session -> get("_pcusers")) {
            $request -> setUserResolver(function () use ($user) {
            });
            return $next($request);
        }

        $request -> getUser();
        return false;
    }
}
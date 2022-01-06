<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;
use Helper;
use Domain;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            $defaultUrl = Helper::route('/');
            $intendedUrl = redirect()->intended()->getTargetUrl();

            return redirect($intendedUrl != $defaultUrl ? $intendedUrl : Helper::route(Domain::auth(), [], false));
        }

        return $next($request);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Language;
use Helper;

class SetLanguage
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
        if (!Language::subdomain(Helper::subdomain())->set($request->segment(1))) {
            return redirect(trim($request->root() . '/' . Language::locale() . ($request->path() != '/' ? '/' . $request->path() : '') . str_replace($request->url(), '', $request->fullUrl()), '/'), 301);
        }

        return $next($request);
    }
}

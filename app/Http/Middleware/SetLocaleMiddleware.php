<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (session()->has('lang')) {
            //lay ra session locale
            app()->setLocale(session()->get('lang'));
        } else {
            //lay ra mac dinh trong config
            app()->setLocale(config('app.locale'));
        }
        return $next($request);
    }
}

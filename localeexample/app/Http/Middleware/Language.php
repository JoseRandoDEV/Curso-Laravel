<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Session()->has('applocale') AND array_key_exists(Session()->get('applocale'), config('languages')))
        {
            App::setLocale(Session()->get('applocale'));
        }
        else
        {
            App::setLocale(Config('app.fallback_locale')); // Establece el idioma por defecto si no hay sesión
        }

        return $next($request);
    }
}

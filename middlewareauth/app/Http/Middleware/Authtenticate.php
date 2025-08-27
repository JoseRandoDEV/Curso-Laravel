<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Authtenticate extends Middleware
{
    protected function redirecTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}

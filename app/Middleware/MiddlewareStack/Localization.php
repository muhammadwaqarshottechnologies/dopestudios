<?php

namespace App\Middleware\MiddlewareStack;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Localization
{
    public function handle(Request $request, Closure $next)
    {
        if (session()->has('lang')) {
            App::setLocale(session()->get('lang'));
        }
        return $next($request);
    }
}

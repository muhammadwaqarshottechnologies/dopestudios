<?php

namespace App\Middleware\MiddlewareStack;

use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    protected function redirectTo($request): ?string
    {
        if (!$request->expectsJson()) {
            return RouteServiceProvider::DASHBOARD_LOGIN;
        }

        return null;
    }
}

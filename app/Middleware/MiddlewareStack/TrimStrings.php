<?php

namespace App\Middleware\MiddlewareStack;

use Illuminate\Foundation\Http\Middleware\TrimStrings as Middleware;

class TrimStrings extends Middleware
{
    protected $except = [
        'user_password',
        'user_password_confirmation',
    ];
}

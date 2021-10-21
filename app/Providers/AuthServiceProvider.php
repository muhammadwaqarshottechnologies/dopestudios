<?php

namespace App\Providers;

use App\Modules\Authentication\AuthenticatableEntityProvider;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;

class AuthServiceProvider extends ServiceProvider
{
    final public function boot(): void
    {
        $this->registerPolicies();

        Auth::provider('custom', function ($app, array $config) {
            return new AuthenticatableEntityProvider($app->make('hash'), $config['model']);
        });
    }
}

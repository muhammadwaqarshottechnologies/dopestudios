<?php

namespace App\Providers;

use Illuminate\Support\Str;
use App\Helpers\PathHelpers;
use App\Helpers\ModuleHelpers;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    public const DASHBOARD = '/dashboard/main';
    public const DASHBOARD_LOGIN = '/dashboard/authentication/login';

    protected $namespace = 'App\\Modules';

    final public function boot(): void
    {
        $this->routes(function () {
            Route::redirect('/', RouteServiceProvider::DASHBOARD_LOGIN);

            Route::prefix('dashboard')->middleware('web')->namespace($this->namespace)->group(function () {
                $this->loadModuleRoutes();
            });
        });
    }

    private function loadModuleRoutes(): void
    {
        foreach (ModuleHelpers::getModules() as $module) {
            $moduleRoutesFile = PathHelpers::modulePath("$module->name\\Routes\\routes.php");

            if (File::exists($moduleRoutesFile)) {
                Route::namespace("$module->name\\Controllers")
                    ->prefix(Str::lower($module->name))
                    ->as(Str::lower($module->name) . '.')
                    ->group(PathHelpers::modulePath("$module->name\\Routes\\routes.php"));
            }
        }
    }
}

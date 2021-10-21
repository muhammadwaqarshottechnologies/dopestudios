<?php

namespace App\Providers;

use App\Helpers\PathHelpers;
use App\Helpers\ModuleHelpers;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->registerModuleViewDirectories();
    }

    private function registerModuleViewDirectories(): void
    {
        foreach (ModuleHelpers::getModules() as $module) {
            $moduleViewsFolder = PathHelpers::modulePath("$module->name\\Views");

            if (File::exists($moduleViewsFolder)) {
                View::addNamespace($module->name, $moduleViewsFolder);
            }
        }
    }
}

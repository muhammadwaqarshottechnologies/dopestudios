<?php

namespace App\Helpers;

use stdClass;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ModuleHelpers
{
    final public static function getModules(): array
    {
        $modules = File::directories(app_path('Modules'));
        return array_map(static function (string $module): stdClass {
            $moduleObject = new stdClass();
            $moduleObject->name = Str::afterLast($module, DIRECTORY_SEPARATOR);
            $moduleObject->path = $module;

            return $moduleObject;
        }, $modules);
    }
}

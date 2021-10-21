<?php

namespace App\Helpers;

class PathHelpers
{
    final public static function modulePath(string $module): string
    {
        return app_path('Modules' . DIRECTORY_SEPARATOR . $module);
    }
}

<?php

namespace App\Helpers;

class PathHelpers
{
	final public static function modulePath(string $module): string
	{
		$module = self::cleanProvidedPath($module);

		return app_path('Modules' . DIRECTORY_SEPARATOR . $module);
	}

	private static function cleanProvidedPath(string $moduleInnerPath): string
	{
		$clearEmptyStrings = static function ($part) {
			return (bool)$part;
		};

		$finelyBrokenModulePath = array_map(
			static function ($modulePartPath) use ($clearEmptyStrings) {
				return array_filter(
					explode('/', $modulePartPath), $clearEmptyStrings
				);
			}, array_filter(
				explode('\\', $moduleInnerPath), $clearEmptyStrings
			)
		);

		return trim(
			implode(
				DIRECTORY_SEPARATOR, array_map(static function ($modulePartPath) {
					return implode(DIRECTORY_SEPARATOR, $modulePartPath);
				}, $finelyBrokenModulePath)
			), '\\/'
		);
	}
}
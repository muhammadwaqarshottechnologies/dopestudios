<?php

namespace App\Console;

use App\Helpers\ModuleHelpers;
use App\Helpers\PathHelpers;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\File;

class Kernel extends ConsoleKernel
{
	protected function commands(): void
	{
		$this->load(app_path('Console/Commands'));

		$this->loadIndividualModuleMigrations();
	}

	private function loadIndividualModuleMigrations(): void
	{
		foreach (ModuleHelpers::getModules() as $module) {
			$moduleCommandPath = PathHelpers::modulePath("$module->name\\Commands");

			if (File::exists($moduleCommandPath)) {
			    $this->load($moduleCommandPath);
			}
		}
	}
}

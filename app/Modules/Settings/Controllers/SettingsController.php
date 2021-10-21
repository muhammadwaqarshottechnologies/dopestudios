<?php

namespace App\Modules\Settings\Controllers;

use App\BaseClasses\BaseController;
use Illuminate\View\View;

class SettingsController extends BaseController
{
	public function index(): View
	{
		return view('Settings::settings');
	}
}
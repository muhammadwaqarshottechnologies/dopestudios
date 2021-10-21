<?php

namespace App\Modules\Main\Controllers;

use App\BaseClasses\BaseController;
use Illuminate\View\View;

class DashboardController extends BaseController
{
	public function index(): View
	{
		return view('Main::dashboard');
	}
}
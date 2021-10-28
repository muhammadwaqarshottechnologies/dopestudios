<?php

namespace App\Modules\Music\Controllers;

use App\BaseClasses\BaseController;
use Illuminate\View\View;

class MusicController extends BaseController
{
	public function musicDashboard(): View
	{
		return view('Music::music-dashboard');
	}

	public function myMusic(): View
	{
		return view('Music::music-library');
	}
}
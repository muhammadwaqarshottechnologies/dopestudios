<?php

namespace App\Modules\Music\Controllers;

use App\BaseClasses\BaseController;
use Illuminate\View\View;

class MusicController extends BaseController
{
	public function index(): View
	{
		return view('Music::music');
	}
}
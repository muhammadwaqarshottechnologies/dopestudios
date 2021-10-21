<?php

namespace App\Modules\User\Controllers;

use App\BaseClasses\BaseController;
use Illuminate\View\View;

class UserController extends BaseController
{
	public function index(): View
	{
		return view('User::user');
	}
}
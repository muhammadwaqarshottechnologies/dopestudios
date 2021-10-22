<?php

namespace App\Modules\User\Controllers;

use App\BaseClasses\BaseController;
use App\Modules\User\Services\UserService;
use Illuminate\View\View;

class UserController extends BaseController
{
	public function __construct(private UserService $userService)
	{
		//
	}

	public function index(): View
	{
		$users = $this->userService->getUserList();
		return view('User::user', compact('users'));
	}
}
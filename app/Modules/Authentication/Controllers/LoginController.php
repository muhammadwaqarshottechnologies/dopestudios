<?php

namespace App\Modules\Authentication\Controllers;

use App\BaseClasses\BaseController;
use App\Modules\Authentication\Requests\LoginRequest;
use App\Modules\Authentication\Services\LoginService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LoginController extends BaseController
{
    public function __construct(private LoginService $loginService)
    {
        //
    }

    final public function index(): View
    {
        return view('Authentication::login');
    }

    final public function login(LoginRequest $request): RedirectResponse
    {
        return $this->loginService->attemptLogin($request, $request->validated());
    }

	final public function logout(Request $request): RedirectResponse
	{
		return $this->loginService->attemptLogout($request);
	}
}

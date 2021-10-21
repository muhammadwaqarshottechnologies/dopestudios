<?php

namespace App\Modules\Authentication\Controllers;

use App\BaseClasses\BaseController;
use App\Modules\Authentication\Requests\RegisterRequest;
use App\Modules\Authentication\Services\RegisterService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class RegisterController extends BaseController
{
    public function __construct(private RegisterService $registerService)
    {
        //
    }

    final public function index(): View
    {
        return view('Authentication::register');
    }

    final public function register(RegisterRequest $request): RedirectResponse
    {
        return $this->registerService->attemptRegister($request, $request->validated());
    }
}

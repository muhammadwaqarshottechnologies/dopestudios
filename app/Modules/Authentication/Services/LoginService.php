<?php

namespace App\Modules\Authentication\Services;

use App\BaseClasses\BaseService;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginService extends BaseService
{
    final public function attemptLogin(Request $request, array $credentials): RedirectResponse
    {
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended(RouteServiceProvider::DASHBOARD);
        }

        return redirect(RouteServiceProvider::DASHBOARD_LOGIN)->withErrors(['user_email' => 'The provided credentials do not match our records']);
    }

    final public function attemptLogout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(RouteServiceProvider::DASHBOARD_LOGIN);
    }
}

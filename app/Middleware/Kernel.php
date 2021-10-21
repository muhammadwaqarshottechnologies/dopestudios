<?php
/** @noinspection PhpFullyQualifiedNameUsageInspection */

namespace App\Middleware;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
	/**
	 * The application's global HTTP middleware stack.
	 *
	 * These middlewares are run during every request to your application.
	 *
	 * @var array
	 */
	protected $middleware = [
		\App\Middleware\MiddlewareStack\TrustHosts::class,
		\App\Middleware\MiddlewareStack\TrustProxies::class,
		\Fruitcake\Cors\HandleCors::class,
		\App\Middleware\MiddlewareStack\PreventRequestsDuringMaintenance::class,
		\Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
		\App\Middleware\MiddlewareStack\TrimStrings::class,
		\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
	];

	/**
	 * The application's route middleware groups.
	 *
	 * @var array
	 */
	protected $middlewareGroups = [
		'web' => [
			\App\Middleware\MiddlewareStack\EncryptCookies::class,
			\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
			\Illuminate\Session\Middleware\StartSession::class,
			\Illuminate\Session\Middleware\AuthenticateSession::class,
			\Illuminate\View\Middleware\ShareErrorsFromSession::class,
			\App\Middleware\MiddlewareStack\VerifyCsrfToken::class,
			\Illuminate\Routing\Middleware\SubstituteBindings::class,
			\App\Middleware\MiddlewareStack\Localization::class,
		],

		'api' => [
			'throttle:api',
			\Illuminate\Routing\Middleware\SubstituteBindings::class,
		],
	];

	/**
	 * The application's route middleware.
	 *
	 * These middlewares may be assigned to group or used individually.
	 *
	 * @var array
	 */
	protected $routeMiddleware = [
		'auth' => \App\Middleware\MiddlewareStack\Authenticate::class,
		'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
		'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
		'can' => \Illuminate\Auth\Middleware\Authorize::class,
		'guest' => \App\Middleware\MiddlewareStack\RedirectIfAuthenticated::class,
		'password.confirm' => \Illuminate\Auth\Middleware\RequirePassword::class,
		'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
		'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
		'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
	];
}

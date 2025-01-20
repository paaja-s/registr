<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
	/**
	 * The application's global HTTP middleware stack.
	 *
	 * @var array
	 */
	protected $middleware = [
		// Middleware pro všechny požadavky
		//\App\Http\Middleware\TrustProxies::class,
		//\Fruitcake\Cors\HandleCors::class,
		//\App\Http\Middleware\PreventRequestsDuringMaintenance::class,
		\Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
		//\App\Http\Middleware\TrimStrings::class,
		\Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
	];
	
	/**
	 * The application's route middleware groups.
	 *
	 * @var array
	 */
	protected $middlewareGroups = [
		'web' => [
		],
		
		'api' => [
			//\Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
			'throttle:api',
			\Illuminate\Routing\Middleware\SubstituteBindings::class,
		],
	];
	
	/**
	 * The application's route middleware.
	 *
	 * @var array
	 */
	protected $routeMiddleware = [
	];
}

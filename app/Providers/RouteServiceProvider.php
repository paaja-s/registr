<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;


class RouteServiceProvider extends ServiceProvider
{
	protected $namespace = 'App\\Http\\Controllers';
	
	public function boot()
	{
		$this->configureRateLimiting();

		$this->routes(function () {
			Route::prefix('api')
			->middleware('api')
			->namespace($this->namespace)
			->group(base_path('routes/api.php'));

			Route::middleware('web')
			->namespace($this->namespace)
			->group(base_path('routes/web.php'));
		});
	}
	
	/**
	 * Mapa rout pro aplikaci.
	 */
	public function map()
	{
		/*$this->routes(function () {
			Route::prefix('api')
			->middleware('api')
			->namespace($this->namespace)
			->group(base_path('routes/api.php'));
		});*/
		
		// API routy
		$this->mapApiRoutes();
	}
	
	/**
	 * Definice rout pro API.
	 */
	protected function mapApiRoutes(): void
	{
		Route::prefix('api')
		->middleware('api')
		->namespace($this->namespace)
		->group(base_path('routes/api.php'));
	}
	
	protected function configureRateLimiting()
	{
		RateLimiter::for('api', function ($request) {
			return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
		});
	}
}

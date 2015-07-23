<?php

namespace	AndyJessop\Starter;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class StarterServiceprovider extends ServiceProvider{

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	public function boot()
	{
		$this->loadViewsFrom(realpath(__DIR__.'/../resources/views'), 'starter');
		$this->setupRoutes($this->app->router);
		$this->publishes([
			__DIR__.'/../config/starter.php' => config_path('starter.php'),
		]);
	}

	/**
	 * Define the routes for the application.
	 *
	 * @param  \Illuminate\Routing\Router  $router
	 * @return void
	 */
	public function setupRoutes(Router $router)
	{
		$router->group(['namespace' => 'AndyJessop\Starter\Http\Controllers'], function($router)
		{
			require __DIR__.'/Http/routes.php';
		});
	}

	public function register()
	{
		$this->registerStarter();
		config([
			'config/starter.php',
		]);
	}

	private function registerStarter()
	{
		$this->app->bind('starter',function($app){
			return new Starter($app);
		});
	}
}

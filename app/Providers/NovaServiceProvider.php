<?php

namespace Caddy\Providers;

use Laravel\Nova\Nova;
use Laravel\Nova\Cards\Help;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\NovaApplicationServiceProvider;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		parent::boot();
		$this->app->booted(function () {
			$this->routes();
		});
		Nova::serving(function (ServingNova $event) {
			Nova::script('{{ component }}', __DIR__.'/../dist/js/OrdersByChart.js');
		});
	}

	/**
	 * Register the Nova routes.
	 *
	 * @return void
	 */
	protected function routes()
	{
		Nova::routes()
				->withAuthenticationRoutes()
				->withPasswordResetRoutes()
				->register();
	}

	/**
	 * Register the Nova gate.
	 *
	 * This gate determines who can access Nova in non-local environments.
	 *
	 * @return void
	 */
	protected function gate()
	{
		Gate::define('viewNova', function ($user) {
			return in_array($user->email, [
				'caddy@caddydz.me'
			]);
		});
	}

	/**
	 * Get the cards that should be displayed on the Nova dashboard.
	 *
	 * @return array
	 */
	protected function cards()
	{
		return [
			new Help,
		];
	}

	/**
	 * Get the tools that should be listed in the Nova sidebar.
	 *
	 * @return array
	 */
	public function tools()
	{
		return [];
	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}
}

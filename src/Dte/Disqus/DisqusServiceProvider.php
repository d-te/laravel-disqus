<?php

namespace Dte\Disqus;

use Illuminate\Support\ServiceProvider;

class DisqusServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['disqus'] = $this->app->share(function($app)
        {
            return new Disqus($app['config']);
        });
	}

	public function boot()
	{
		$this->package('d-te/laravel-disqus', 'laravel-disqus');
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}

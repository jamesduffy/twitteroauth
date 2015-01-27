<?php namespace Abraham\TwitterOAuth;

use Illuminate\Support\ServiceProvider;
use Config;

class TwitterOAuthServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('abraham/twitter', 'abraham/twitter');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$app = $this->app;
        
        $app['twitteroauth'] = $app->share(function ($app) {
            return new \Abraham\TwitterOAuth\TwitterOAuth(
            	$app['config']->get('twitteroauth::CONSUMER_KEY'), 
            	$app['config']->get('twitteroauth::CONSUMER_SECRET'), 
            	$app['config']->get('twitteroauth::ACCESS_TOKEN'), 
            	$app['config']->get('twitteroauth::ACCESS_TOKEN_SECRET')
            );
        });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('twitteroauth');
	}

}
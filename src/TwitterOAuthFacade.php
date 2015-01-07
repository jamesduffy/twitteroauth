<?php namespace Abraham\TwitterOAuth;

use Illuminate\Support\Facades\Facade;

class TwitterOAuthFacade extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'twitteroauth'; }

}
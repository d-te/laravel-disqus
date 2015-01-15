<?php

namespace Dte\Disqus;

use Illuminate\Config\Repository as Config;

class Disqus
{

	protected $config;

	public function __construct(Config $config)
	{
		$this->config = $config;
	}

	public function comments($params = array())
	{
		$settings = array();
		$language = false;

		$settings['disqus_shortname'] = $this->config->get('laravel-disqus::disqus_shortname');

		if (isset($params['disqus_identifier'])) {
			$settings['disqus_identifier'] = $params['disqus_identifier'];
		}

		if (isset($params['disqus_title'])) {
			$settings['disqus_title'] = $params['disqus_title'];
		}

		if (isset($params['disqus_url'])) {
			$settings['disqus_url'] = $params['disqus_url'];
		}

		if (isset($params['disqus_category_id'])) {
			$settings['disqus_category_id'] = $params['disqus_category_id'];
		}

		if (true === $this->config->get('laravel-disqus::auto_set_language')) {
			$language = $this->getDisqusLanguage(\App::getLocale());
		}

		if (isset($params['language'])) {
			$language = $params['language'];
		}

		return \View::make('laravel-disqus::disqus.comments', array(
				'settings' => $settings,
				'language' => $language,
			));
	}

	public function commentsCountScript()
	{
		$settings = array();

		$settings['disqus_shortname'] = $this->config->get('laravel-disqus::disqus_shortname');

		return \View::make('laravel-disqus::disqus.counts', array(
				'settings' => $settings,
			));
	}

	public function getDisqusLanguage($language)
	{
		$disqusLanguages = $this->config->get('laravel-disqus::discus_languages');

		if (array_key_exists($language, $disqusLanguages)) {
			$language = $disqusLanguages[$language];
		}

		return $language;
	}
}

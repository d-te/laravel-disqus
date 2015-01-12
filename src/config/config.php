<?php

return array(
	/**
	 * disqus_shortname: You can find your disqus shortname afer signing up and visiting disqus.com/admin/settings/
	 */
	'disqus_shortname' => '',

	/**
	 * Set disqus language based on current App locale
	 */
	'auto_set_language' => false,

	/**
	 * Sometimes discus languages is  note corresponde to App locale.
	 * To convert App locale to discus locale just add supported locales to this array
	 * List of supported disqus lanquages: https://www.transifex.com/languages/
	 *
	 * example:
	 * 		'discus_locales' => array(
	 * 			'en' => 'en',
	 * 			'ua' => 'uk',
	 * 			'ru' => 'ru',
	 * 		)
	 */
	'discus_languages' => array(),
);

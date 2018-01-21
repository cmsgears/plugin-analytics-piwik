<?php
namespace cmsgears\piwik\analytics\config;

// CMG Imports
use cmsgears\core\common\config\CmgProperties;

class PiwikAnalyticsProperties extends CmgProperties {

	const CONFIG_PIWIK_ANALYTICS	= 'piwik-analytics';

	const PROP_ACTIVE		= 'active';

	const PROP_GLOBAL		= 'global';

	const PROP_FORM_PAGE	= 'form-page';

 	const PROP_BLOG_PAGE	= 'blog-page';
 	const PROP_BLOG_POST	= 'blog-post';

 	const PROP_TOKEN		= 'token';

	// Singleton instance
	private static $instance;

	// Constructor and Initialisation ------------------------------

	/**
	 * Return Singleton instance.
	 */
	public static function getInstance() {

		if( !isset( self::$instance ) ) {

			self::$instance	= new PiwikProperties();

			self::$instance->init( self::CONFIG_PIWIK_ANALYTICS );
		}

		return self::$instance;
	}

	public function isActive() {

		return $this->properties[ self::PROP_ACTIVE ];
	}

	public function isGlobal() {

		return $this->properties[ self::PROP_GLOGAL ];
	}

	public function isFormPage() {

		return $this->properties[ self::PROP_FORM_PAGE ];
	}

	public function isBlogPage() {

		return $this->properties[ self::PROP_BLOG_PAGE ];
	}

	public function isBlogPost() {

		return $this->properties[ self::PROP_BLOG_POST ];
	}

	public function getToken() {

		return $this->properties[ self::PROP_TOKEN ];
	}
}

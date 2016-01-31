<?php
namespace cmsgears\piwik\config;

// Yii Imports
use \Yii;

// CMG Imports
use cmsgears\core\common\config\CoreGlobal;

use cmsgears\core\common\config\CmgProperties;

class PiwikSettings extends CmgProperties {

	const CONFIG_ACTIVE		= 'active';
 	const CONFIG_PAGE		= 'page';
 	const CONFIG_POST		= 'post';
 	const CONFIG_TOKEN		= 'token';

	// Singleton instance
	private static $instance;

	// Constructor and Initialisation ------------------------------

 	private function __construct() {

	}

	/**
	 * Return Singleton instance.
	 */
	public static function getInstance() {

		if( !isset( self::$instance ) ) {

			self::$instance	= new TwitterSettings();

			self::$instance->init( 'piwik' );
		}

		return self::$instance;
	}
	
	public function isActive() {
		
		return $this->properties[ self::CONFIG_ACTIVE ];
	}

	public function isPage() {
		
		return $this->properties[ self::CONFIG_PAGE ];
	}

	public function isPost() {
		
		return $this->properties[ self::CONFIG_POST ];
	}

	public function getToken() {
		
		return $this->properties[ self::CONFIG_TOKEN ];
	}
}

?>
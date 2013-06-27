<?php

/*
 * Register the autoloader for cricfi ui
 */
spl_autoload_register(array('UIAutoloader', 'autoload'));

/**
 * Class autoloader.
 * @MarkForChange Entity
 */
class UIAutoloader {

	/** Maps classnames to files containing the class. */
	private static $classes = array(           
                        // Controllers
                        'UIController' => '/controllers/UIController.php',
                        'AccountSettingsController' => '/controllers/AccountSettingsController.php',
                        'HomeController' => '/controllers/HomeController.php',
                        'PrivacyController' => '/controllers/PrivacyController.php',
                        'ResetpasswordController' => '/controllers/ResetpasswordController.php',
                        'ForgotpasswordController' => '/controllers/ForgotpasswordController.php',
                        'LandingController' => '/controllers/LandingController.php',
                        'SignupController' => '/controllers/SignupController.php',
			// util
			'UIUtil' => '/lib/UIUtil.php'
				);

	/**
	 * Loads a class.
	 * @param string $className The name of the class to load.
	 */
	public static function autoload($className) {
		if(isset(self::$classes[$className])) {
			require_once(UIParameter::UI_ROOT_DIR.self::$classes[$className]);                    
		}
	}

}

?>

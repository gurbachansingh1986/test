<?php

$UI_ROOT_DIR = dirname(__FILE__).'/..';

/*
 * Initialize the parameters so that it is available for all kind of setup
 */
require_once($UI_ROOT_DIR.'/config/UIParameter.php');

/* 
 * Register autoloader function for the library
 * All the includes must be defined in the autoloader
 */
require_once($UI_ROOT_DIR.'/lib/UIAutoloader.php');

?>

<?php
//error_reporting(E_ALL);
//ini_set('display_errors',1);
include_once '/home/amitabh/cricfi/bit/lib/baseLib.php';
include_once '/home/amitabh/cricfi/ess/lib/uiLib.php';

require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();

/**
 * Step 2: Instantiate a Slim application
 *
 * This example instantiates a Slim application using
 * its default settings. However, you will usually configure
 * your Slim application now by passing an associative array
 * of setting names and values into the application constructor.
 */
$app = new \Slim\Slim(array('templates.path' => '.'));
/**
 * Step 3: Define the Slim application routes
 */

include_once '/home/amitabh/cricfi/bit/app/route/APIRoute.php';
include_once '/home/amitabh/cricfi/ess/route/UIRoute.php';
/**
 * Step 4: Run the Slim application
 *
 * This method should be called last. This executes the Slim application
 * and returns the HTTP response to the HTTP client.
 */
$app->run();

<?php
/**
 * Description of LandingController
 *
 * @author manoj
 */
class LandingController extends UIController
{
    private function __construct() {

    }
    
    public static function getController() 
    {
        if(!isset(self::$controller))
            self::$controller = new LandingController();
        return self::$controller;
    }
    
    public function handleRequest($app) 
    {
        $app->render('/layouts/landing.php');
    }
}

?>

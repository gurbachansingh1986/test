<?php

/**
 * Description of HomeController
 *
 * @author kshashan
 */
class ForgotpasswordController extends UIController
{
    private function __construct() {
        ;
    }
    
    public static function getController() 
    {
        if(!isset(self::$controller))
            self::$controller = new ForgotpasswordController();
        return self::$controller;
    }
    
    public function handleRequest($app) 
    {
        $app->render('/layouts/forgot-password.php');
    }
    
    public function getToken($app) 
    {
        try {
            $request = Request::get();
            echo $authUrlKey = AuthenticationService::getService()->getPasswordResetToken($app->request()->post('email'));
            //mail($app->request()->post('email'),"Forgot Password",$authUrlKey);
            exit;
            $app->render('/layouts/forgot-password.php');
        }
        catch(Exception $e)
        {
           //ServiceUtil::createExceptionResponse($e, $app);
            echo "hi";
        }
    }
}

?>

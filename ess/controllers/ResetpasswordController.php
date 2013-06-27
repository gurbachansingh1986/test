<?php

/**
 * Description of HomeController
 *
 * @author kshashan
 */
class ResetpasswordController extends UIController
{
    private function __construct() {
        ;
    }
    
    public static function getController() 
    {
        if(!isset(self::$controller))
            self::$controller = new ResetpasswordController();
        return self::$controller;
    }
    
    public function handleRequest($app) 
    {
        $app->render('/layouts/reset-password.php');
    }
    
    //editResetPassword
    
    public function getPassword($app) 
    {
        
        try 
        {
            $request = Request::get();
            $result = AuthenticationService::getService()->resetPassword($app->request()->post('tokenNo'),$app->request()->post('newPassword'));
            $app->redirect('landing.php');
        }
        catch(Exception $e)
        {
          
           ServiceUtil::createExceptionResponse($e, $app);
        }
        
    }
}

?>

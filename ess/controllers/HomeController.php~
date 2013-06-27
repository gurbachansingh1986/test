<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
/**
 * Description of HomeController
 *
 * @author kshashan
 */
class HomeController extends UIController
{
    private function __construct() {
        ;
    }
    
    public static function getController() 
    {
        if(!isset(self::$controller))
            self::$controller = new HomeController();
        return self::$controller;
    }
    
     public function handleRequest($app) 
    {
        try {
            // Set Request object
            $request = Request::get();
            $request->populateAuthenticationParams();
            $request->authenticate();
            $app->render('/layouts/home.php');
        }
        catch(Exception $e)
        {
            $_SESSION['Invaccess'] = 'Invalid username or password';
	    $app->render('/layouts/landing.php');
            //ServiceUtil::createExceptionResponse($e, $app);
            
        }
        
    }
    
    
    
    public function editAccountRequest($app) 
    {
        
        $request = Request::get();
        $request instanceof Request;
        
        $request->populateAuthenticationParams();
        $request->authenticate();
        $emailPreferences=$_POST['emailPreferences'];
        $notificationEmail = addslashes($_POST['notificationEmail']);
              
       // echo $emailPreferences.','.$notificationEmail;exit;

        $accountSettingFO = new AccountSettingFO();
        $accountSettingFO->setNotificationEmail($notificationEmail);
        $accountSettingFO->setNotificationReceivePreference($emailPreferences);

        $requestPayload = new RequestPayload();
        $requestPayload->setFormName('AccountSettingFO');
        $requestPayload->setFormObject($accountSettingFO);

        
        $request->setPayload($requestPayload);
        //$dto = UserService::getService()>editAccountSettings($request>getUser(), $request);
       $dto = UserService::getService()->editAccountSettings($request);
        echo "Updated Successfully";
        exit;
    }
    
    
    
    
}

?>

<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 'On');
/**
 * Description of HomeController
 *
 * @author kshashan
 */
class AccountSettingsController extends UIController
{
    private function __construct() {
        ;
    }
    
    public static function getController() 
    {
        if(!isset(self::$controller))
            self::$controller = new AccountSettingsController();
        return self::$controller;
    }
    
   /*public function handleRequest($app) 
    {
        
        $requestor = UserQuery::create()->findPk(5);
        $_POST['emailId'] = $requestor->getEmailId();
        $_POST['password'] = 'password';
        $_COOKIE['token'] = NULL;
        $request = Request::get();
        $request instanceof Request;
        
        $request->populateAuthenticationParams();
        $request->authenticate();
        
        
        //Trending Topics      
        $trendingTopics = PostService::getService()->getTrendingTopics();
        
        //User Details
        $regionMap = new RegionMap('UserRegions', Array(UserRegions::Friends,  UserRegions::AccountSettings));
        
          
        
       $notiFication = Array('All'=>'-1','FYI'=>'0','Approval'=>'1','None'=>'3');
       
       
        $userInfo = UserService::getService()->getUserDetails($request->getUser(), $regionMap->getMap(), 'obj');
        
        $data = Array('trendingTopics'=>$trendingTopics, 'userInfo'=>$userInfo,'notiFication'=>$notiFication);
        
        $app->render('/layouts/account-settings.php', array('data'=> $data));
    }*/
    public function handleRequest($app) {
       // echo "<pre>";
        //print_r($_COOKIE);
        $requestor = UserQuery::create()->findPk(5);       
        $_POST['emailId'] = $requestor->getEmailId();
        $_POST['password'] = 'password';
        $_COOKIE['token'] = NULL;
        $request = Request::get();
        $request instanceof Request;
        
        $request->populateAuthenticationParams();
        $request->authenticate();
        
        //Trending Topics      
        $trendingTopics = PostService::getService()->getTrendingTopics();
        
        //User Details
       $regionMap = new RegionMap('UserRegions', Array(UserRegions::Friends,  UserRegions::AccountSettings));
        
      $userInfo = UserService::getService()->getUserDetails($request->getUser(),$regionMap->getMap(), 'obj');
      
       
       $notiFication = Array('All'=>'-1','FYI'=>'0','Approval'=>'1','None'=>'3');
       //$data = Array('trendingTopics'=>$trendingTopics,'notiFication'=>$notiFication,'email'=>$_POST['emailId']);
       $data = Array('trendingTopics'=>$trendingTopics, 'userInfo'=>$userInfo,'notiFication'=>$notiFication);
        $app->render('/layouts/account-settings.php', array('data'=> $data));
}
    
    
    
    public function editAccountRequest($app) 
    {
        $requestor = UserQuery::create()->findPk(5);
        $_POST['emailId'] = $requestor->getEmailId();
        $_POST['password'] = 'password';
        $_COOKIE['token'] = NULL;
        $request = Request::get();
        $request instanceof Request;
        
        $request->populateAuthenticationParams();
        $request->authenticate();
        $emailPreferences=$_POST['emailPreferences'];
        $notificationEmail = addslashes($_POST['notificationEmail']);
              
        //echo $emailPreferences.','.$notificationEmail;exit;

        $accountSettingFO = new AccountSettingFO();
        $accountSettingFO->setNotificationEmail($notificationEmail);
        $accountSettingFO->setNotificationReceivePreference($emailPreferences);
        
        $requestPayload = new RequestPayload();        
        $requestPayload->setFormName('AccountSettingFO');
        $requestPayload->setFormObject($accountSettingFO);
                
        $request->setPayload($requestPayload);
        
      //  $dto = UserService::getService()>editAccountSettings($request>getUser(), $request);
        $dto = UserService::getService()->editAccountSettings(3,$request);
        echo "Updated Successfully";
        exit;
    }
    
    
    
    
}

?>
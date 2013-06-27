<?php

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
    
    public function handleRequest($app) 
    {
        $requestor = UserQuery::create()->findPk(5);
       
       
        $request = Request::get();
        $request instanceof Request;
        
        $request->populateAuthenticationParams();
        $request->authenticate();
        
        //Trending Topics      
        $trendingTopics = PostService::getService()->getTrendingTopics();
        
        //User Details
        $regionMap = new RegionMap('UserRegions', Array(UserRegions::Friends,  UserRegions::AccountSettings));
        /*
        $authorizationParams = new AuthorizationParams();
        $authorizationParams->setEntityType(EntityType::User);
        $authorizationParams->setEntityId($request->getUserId());
        $authorizationParams->setRequestedAccessLevel(AccessLevel::READ);
        $authorizationParams->setRegionMap($regionMap);
        $request->setAuthorizationParams($authorizationParams);
        $request->authorize(); */
        
        $userInfo = UserService::getService()->getUserDetails($request->getUser(), $regionMap->getMap(), 'obj');
         echo "<pre>";
        print_r($userInfo);
        echo "In Con";die;
        $data = Array('trendingTopics'=>$trendingTopics, 'userInfo'=>$userInfo);
        $app->render('/layouts/account-settings.php', array('data'=> $data));
    }
}

?>

<?php

/**
 * Description of HomeController
 *
 * @author kshashan
 */
class PrivacyController extends UIController
{
    private function __construct() {
        ;
    }
    
    public static function getController() 
    {
        if(!isset(self::$controller))
            self::$controller = new PrivacyController();
        return self::$controller;
    }
    
    public function handleRequest($app) 
    {
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
       //echo $userDetail = $request->getUser();
          
      // echo json_decode($userDetail); 
        //echo "<pre>";
       //var_dump($userDetail);
        //echo "AAAAAAAA :".$userDetail->friends->first_name;
        $userInfo = UserService::getService()->getUserDetails($request->getUser(), $regionMap->getMap(), 'obj');
        
        $data = Array('trendingTopics'=>$trendingTopics, 'userInfo'=>$userInfo);
        $app->render('/layouts/privacy-settings.php', array('data'=> $data));
    }
}

?>

<?php
        $app->get('/privacy.php', function() use($app) {
            PrivacyController::getController()->handleRequest($app);
        });
        
         $app->get('/reset-password.php', function() use($app) {
            ResetpasswordController::getController()->handleRequest($app);
        });
        
        $app->get('/forgot-password.php', function() use($app) {
            ForgotpasswordController::getController()->handleRequest($app);
        });
        
        $app->post('/forgot-password.php', function() use($app) {
            ForgotpasswordController::getController()->getToken($app);
        });
  
        $app->get('/reset-password.php', function() use($app) {            
            ResetpasswordController::getController()->handleRequest($app);
        });
        
        $app->post('/reset-password.php', function() use($app) {            
            ResetpasswordController::getController()->getPassword($app);
        });
        
        $app->post('/edit-account-setting.php', function() use($app) { 
            AccountSettingsController::getController()->editAccountRequest($app);
        });



/*manoj*/

	$app->get('/landing.php', function() use($app) {
		    LandingController::getController()->handleRequest($app);
		});
		
	$app->get('/account-settings.php', function() use($app) {
                    AccountSettingsController::getController()->handleRequest($app);
	      });
	      
	$app->post('/home.php', function() use($app) {
		HomeController::getController()->handleRequest($app);
	     });
	      
	$app->post('/signup.php', function() use($app) {
		    SignupController::getController()->handleRequest($app);     
	     });

?>

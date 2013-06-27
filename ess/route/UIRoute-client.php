<?php
$app->get('/account-settings.php', function() use($app) {
            AccountSettingsController::getController()->handleRequest($app);
        });

?>

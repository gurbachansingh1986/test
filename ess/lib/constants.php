<?php
define('DS', '/');
define('ROOT', dirname(dirname(__FILE__)).DS."..".DS);
define('DOCUMENT_ROOT',$_SERVER['DOCUMENT_ROOT']);
define('WEB_SITE','http://'.$_SERVER['SERVER_NAME'].DS);
define('WEB_URL','http://'.$_SERVER['SERVER_NAME'].DS.'index.php');
define('ADMIN_EMAIL','');
define('DEVELOPMENT_ENVIRONMENT',true);
define('API_URL','http://'.$_SERVER['SERVER_NAME'].DS);
define('JS_PATH','http://'.$_SERVER['SERVER_NAME'].DS.'js/');
define('CSS_PATH','http://'.$_SERVER['SERVER_NAME'].DS.'css/');
define('IMAGE_PATH','http://'.$_SERVER['SERVER_NAME'].DS.'images/');

?>

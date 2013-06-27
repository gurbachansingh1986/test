<?php
/**
 *
 * @author kshashan
 */
abstract class UIController 
{
    public static $controller;
    
    abstract public static function getController();
    
    abstract public function handleRequest($app);
}

?>

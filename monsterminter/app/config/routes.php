<?php  

$router = new Phalcon\Mvc\Router();  

$router->add('/nft', array( 
    'controller' => 'api', 
    'action' => 'nft', 
 ));
 
return $router; 

<?php

ini_set('display_errors', 1); // display errors
require_once 'core/model.php';
require_once 'core/view.php';
require_once 'core/controller.php';
require_once 'core/router.php';

$router = new Router();
$router->add('', array('controller' => 'Home', 'action' => 'index'));
$router->add('post/{id:\d+}', array('controller' => 'Home', 'action' => 'index'));
/**
    * EXAMPLE dynamic url
    * You can get the id by call $this->param in controller
    * $router->add('post/{id:\d+}', array('controller' => 'post', 'action' => 'index'));
    */
$router->dispatch($_SERVER['QUERY_STRING']);

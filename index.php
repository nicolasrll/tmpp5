<?php

use Core\Request;
use Core\Router;
use Core\Dispatcher;

require_once('core/Request.php');
require_once('core/Router.php');
require_once('core/Dispatcher.php');

try{
    $dispatcher = new Dispatcher();
} catch (Exception $e) {
    echo 'Exception  reçue : ' . $e->getMessage();
}

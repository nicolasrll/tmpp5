<?php

use Core\Request;
use Core\Router;

require_once('core/Request.php');
require_once('core/Router.php');

try{
    $request = Request::getInstance();
    $router = new Router();
} catch (Exception $e) {
    echo 'Exception  reçue : ' . $e->getMessage();
}

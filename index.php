<?php

require 'vendor/autoload.php';

use Core\Request;
use Core\Router;
use Core\Dispatcher;

try{
    $dispatcher = new Dispatcher();
} catch (Exception $e) {
    echo 'Exception  reçue : ' . $e->getMessage();
}

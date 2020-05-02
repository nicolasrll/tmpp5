<?php

use Core\Request;
use Core\Router;
use Core\Dispatcher;

require 'vendor/autoload.php';

try{
    $dispatcher = new Dispatcher();
} catch (Exception $e) {
    echo 'Exception  reçue : ' . $e->getMessage();
}

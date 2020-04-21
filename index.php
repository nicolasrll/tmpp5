<?php

use Core\Request;

require_once('core/Request.php');

try{
    $request = Request::getInstance();
} catch (Exception $e) {
    echo 'Exception  reçue : ' . $e->getMessage();
}

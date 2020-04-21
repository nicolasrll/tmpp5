<?php

use Core\Request;

require_once('core/Request.php');

try{
    $request = Request::getInstance();
    var_dump($request);
} catch (Exception $e) {
    echo 'Exception  reçue : ' . $e->getMessage();
} catch (TypeError $e) {
    echo 'Exception ' . $e->getMessage();
}

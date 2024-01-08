<?php

// require_once "views/register.php";
require_once "views/login.php";
require_once "core/Request.php";

// $newrequest = new Request();
// $newrequest->test($_SERVER);

$uri = $_SERVER['REQUEST_URI'];
// echo "$uri";
if($uri === '/'){
    require "controllers/index.php";
}else if ($uri === '/Registre'){
    require "controllers/RegistreController.php";
}
?>
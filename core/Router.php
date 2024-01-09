<?php

function pagenotfound()
{
    http_response_code(404);
    require "Views/404.php";
}

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
    if($uri === '/'){
        require "controllers/index.php";
    }else if ($uri === '/register'){
        require "controllers/RegistreController.php";
    }
    else if($uri === '/login'){
        require "controllers/loginController.php";
    } else {
        pagenotfound();
    }

?>
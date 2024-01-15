<?php

function pagenotfound()
{
    http_response_code(404);
    require "Views/404.php";
}

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
    if($uri === '/')
    {
        require "controllers/homecontroller.php";
    }else if ($uri === '/register')
    {
        require "controllers/RegistreController.php";
    }
    else if($uri === '/login')
    {
        require "controllers/LoginController.php";
    }else if($uri === '/admin')
    {
        require_once "controllers/Admincontroller.php";
    }else if($uri === '/wikidetails')
    {
        require "controllers/WikiDetailsController.php";
    }else if($uri === '/admin/CategoryAdmin')
    {
        require "controllers/CategoryAdmin.php";
    }else if($uri === '/admin/ModifyTag')
    {
        require "controllers/ModifyTag.php";
    }else if($uri === '/admin/ModifyCategory')
    {
        require "controllers/ModifyCategory.php";
    }else if($uri === '/admin/TagAdmin')
    {
        require "controllers/TagAdmin.php";
    }else if($uri === '/author')
    {
        require "controllers/AuthorController.php";
    }else if($uri === '/author/addWiki')
    {
        require "controllers/AddWikiController.php";
    }
    else {
        pagenotfound();
    }

?>
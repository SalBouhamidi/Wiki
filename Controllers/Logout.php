<?php
require_once "Controller.php";
require_once "./Models/AuthentificationModel.php";

class Logout extends controller{

    public function __construct()
    {
        $this->modelobj = new AuthentificationModel();
        
    }

    public function logout(){
        session_destroy();
        header('Location: /login');
        $this->renderview('login');


    }
}
$test = new Logout();
$test->logout();

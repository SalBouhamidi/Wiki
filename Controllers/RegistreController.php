<?php

require "views/register.php";
require_once "./Models/AuthentificationModel.php";


class RegistreController{
    private $name;
    private $email;
    private $pwd;
    private $repeatpwd;
    private $role;
    public $modelobj;

    public function __construct(){
        $this->modelobj = new AuthentificationModel();
    }
    public function register(){
        if(isset($_POST['submit']))
        {
            $name= $_POST['name'];
            $email= $_POST['email'];
            $pwd= $_POST['pwd'];
            $repeatpwd= $_POST['repeatpwd'];
            $role= $_POST['role'];


            $this->modelobj->RegisterRequete("users",["fullname","email","pwd","repeatpwd"],
            ["$name","$email", "$pwd","$repeatpwd"]);
        }
    }

}
$test= new RegistreController();
$test->register();

?>
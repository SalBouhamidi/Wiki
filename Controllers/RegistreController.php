<?php

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
        require "views/register.php";
        if(isset($_POST['submit']))
        {
            $name= $_POST['name'];
            $email= $_POST['email'];
            $pwd= $_POST['pwd'];
            $repeatpwd= $_POST['repeatpwd'];
            $role= $_POST['role'];

            $this->modelobj->RegisterRequete("users",["fullname","email","pwd","repeatpwd","id_role"],
            ["$name","$email", "$pwd","$repeatpwd","$role"]);
            
        }
    }

}
$test= new RegistreController();
$test->register();

?>
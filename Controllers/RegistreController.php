<?php

require_once "./Models/AuthentificationModel.php";
require_once "Controller.php";


class RegistreController extends Controller
{

    private $name;
    private $email;
    private $pwd;
    private $repeatpwd;
    private $role;
    public $modelobj;

    public function __construct()
    {
        $this->modelobj = new AuthentificationModel();
        
    }


    public function register()
    {
        $this->renderview('register');
    }


    public function registeration()
    {

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
$test->registeration();

?>
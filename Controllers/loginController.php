<?php

require "views/login.php";
require_once "./Models/AuthentificationModel.php";
session_start();
// require "./core/Router.php";

class LoginController{
    private $email;
    private $pwd;

    public function __construct(){
        $this->modelobject = new AuthentificationModel();
     
    }

    public function Logincntrl(){
        if(isset($_POST['submit'])){
            if(empty($_POST['email']) && empty($_POST['password'])){?>
                <div class="alert alert-secondary " role="alert">
                 Please fill up the form before submitting
                </div>
            <?php }else{
                $email=$_POST['email'];
                $pwd=$_POST['password'];
                $checkobj= $this->modelobject->login("users","users.email = '$email'","users.pwd = '$pwd'");
                    
                if($checkobj){
                    // echo "e";
                    $_SESSION["email"] = $_POST['email'];
                    $_SESSION["pwd"]=$_POST['password'];
                    $_SESSION["id_role"]= $checkobj['id_role'];
                    $_SESSION["name"]= $checkobj['fullname'];
                    // var_dump($_SESSION);

                    if($checkobj['id_role'] == 1){
                        header("Location: /");
                    }else if($checkobj['id_role'] == 2){
                        header("location: /admin");
                    }
                    
                    
                   
                }else{
                    echo "Nooot";
                }



            }
         
            
        }
    }
}


$test= new LoginController();
$test->Logincntrl()







?>
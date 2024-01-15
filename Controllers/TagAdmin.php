<?php

require_once "Controller.php";
require_once "./Models/AdminModel.php";

Class TagAdmin extends Controller{


    public $objModel;
    public $name;

    public function __construct(){
        $this->objModel = new AdminModel();
    }
    public function add(){
        $this->AddTag();
        $this->Delete();
        
    }

public function AddTag(){
        
    if(isset($_POST['addtag'])){
        $name =$_POST['tag'];
        $results= $this->objModel->insert('tag',['tag'], [$name]);
        if(isset($results)){
            header('Location: \admin');
        }
    }
    $this->renderview('AddTag');
}


public function Delete(){
    if(isset($_GET['id'])){
        $id= $_GET['id'];
        $results = $this->objModel->delete('tag',"id = '$id'");
        header('Location: \admin');

    }
    
}

}

$test= new TagAdmin();
$test->add();

?>
<?php
require_once "Controller.php";
require_once "./Models/AdminModel.php";

class ArchiverController extends Controller{

    public $objModel;

    public function __construct(){
        $this->objModel = new AdminModel();
    }

    public function archive(){
        $id= $_GET['id'];
        $results = $this->objModel->update('wiki',['archive'], [1], "id = $id");
        $this-> renderview('/admin');
       
    }

}

$test = new ArchiverController();
$test->archive();



?>
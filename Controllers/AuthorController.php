<?php

require_once "Controller.php";
require_once "./Models/AdminModel.php";

Class AuthorController extends Controller
{
    public $objModel;
    public $name;

    public function __construct(){
        $this->objModel = new AdminModel();
    }

    public function Author(){
        $this->renderview('author');
    }

}

$test = new AuthorController();
$test->Author();
?>
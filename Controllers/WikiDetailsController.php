<?php
require_once "./Models/WikiDetailsModel.php";
require_once "Controller.php";

Class WikiDetailsController extends Controller{
    public $Modelobj;
    public function __construct(){
        $Modelobj= new WikiDetailsModel();
    }
    
    public function details(){
        $this->renderview('/wikidetails');
    }


} 

$test=new WikiDetailsController();
$test->details();
?>

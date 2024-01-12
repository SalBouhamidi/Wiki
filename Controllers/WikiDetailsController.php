<?php
require_once "./Models/WikiDetailsModel.php";
require_once "Controller.php";

Class WikiDetailsController extends Controller
{
    public $modelobj;

    
    public function __construct(){
        $this->modelobj= new WikiDetailsModel();
    }



    public function details(){
        $results= $this->getDetails();

        $this->renderview('wikidetails', ['results' => $results]);
    }

    public function getDetails(){
        $id= $_GET['id'];
        $results = $this->modelobj->Wikidetails($id);
        return $results;
        
    }

    

} 

$test=new WikiDetailsController();
$test->details();
?>

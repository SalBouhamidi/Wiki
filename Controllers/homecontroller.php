<?php


require_once "./Models/HomeModel.php";
// require_once "./views/home.php";
require_once "Controller.php";

Class HomeController extends Controller{
    private $id;
    private $name;
    public $objModel;
    public $results;



    public function __construct(){
        $this->objModel = new HomeModel();
    }
    public function home(){
        $this->renderview('home');
    }


    public function getCategories(){
        
        // $results = $this->objModel->getElements("category",[category.id], "6");
        // return $results;
    }

    
}


$objcontroller = new HomeController();
$objcontroller->home();
?>

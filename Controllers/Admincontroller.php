<?php
require_once "Controller.php";
require_once "./Models/AdminModel.php";


Class Admincontroller extends Controller
{
    
    public $objModel;

    public function __construct(){
        $this->objModel = new AdminModel();
    }

    public function crudadmin(){
        $wikies = $this->getWiki();
        $categories = $this->getCategory();
        $tags = $this->getTag();
        $this->renderview('dashboardadmin', ['wikies' => $wikies,
                                             'categories'=> $categories,
                                             'tags' => $tags]);
    }

    public function getWiki(){
        $wikies= $this->objModel->showElementJoin('wiki', 'users','wiki.id_user','users.id', 'wiki.id','ASid');
        return $wikies;
    }

    public function getCategory(){
        $categories= $this->objModel->showElement('category');
        return $categories;
    }

    public function getTag(){
        $tags= $this->objModel->showElement('tag');
        return $tags;
    }



 


}
$test= new Admincontroller;
$test->crudadmin();

?>
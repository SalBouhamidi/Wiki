<?php
require_once "Controller.php";
require_once "./Models/AdminModel.php";

Class CategoryAdmin extends Controller
{
    public $objModel;
    public $name;

    public function __construct(){
        $this->objModel = new AdminModel();
    }
    public function Category(){
        $this->AddCategory();
        $this->Delete();
        
    }

    public function AddCategory(){
        
        if(isset($_POST['addcategory'])){
            $name =$_POST['category'];
            $results= $this->objModel->insert('category',['name'], [$name]);
            if(isset($results)){
                header('Location: \admin');
            }
        }
        $this->renderview('Category');
    }

    public function Delete(){
        if(isset($_GET['id']))
        {
            $id= $_GET['id'];
            $results = $this->objModel->delete('category',"id = $id");
            header('Location: \admin');

        }
        
    }
}

$test = new CategoryAdmin;
$test->Category();


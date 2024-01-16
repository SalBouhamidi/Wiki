<?php

require_once "Controller.php";
require_once "./Models/AuthorModel.php";

Class AuthorController extends Controller
{
    public $objModel;
    public $name;

    public function __construct()
    {
        $this->objModel = new AuthorModel();
    }

    public function Author()
    {   
        $results = $this->getMywikis();
        $delete = $this->delete();     
        $this->renderview('author',['results' => $results]);

    }

    public function getMywikis()
    {
        $id = $_SESSION['id_user'];
        $results= $this->objModel->showWiki('wiki', "id_user = $id");
        return $results;
    }

    public function Delete()
    {
        if(isset($_GET['id']))
        {
            $id= $_GET['id'];
            $delete = $this->objModel->delete('wiki',"id = $id");
            header('Location: \author');
        }
    }


    

}

$test = new AuthorController();
$test->Author();
?>
<?php

require_once "Controller.php";
require_once "./Models/AdminModel.php";

Class ModifyCategory extends Controller
{

    public $objModel;
    public $name;

    public function __construct()
    {
        $this->objModel = new AdminModel();
    }
   public function modify()
   {
    $showcategory = $this->show();
    if(isset($_GET['id'])){
        $id= $_GET['id'];
        if(isset($_POST['modify']))
        {
            $name = $_POST['category'];
            $modifycategory = $this->objModel->update('category',['name'],[$name],"id = $id");
            header('Location: \admin');
        }
    }
    $this->renderview('ModifyCategoryv',['showcategory'=> $showcategory ]);
   }
   public function show()
   {
        $id= $_GET['id'];
        $showcategory= $this->objModel->showOneElement('category', $id);
        return $showcategory;
   }

}

$test = new ModifyCategory();
$test->modify();
?>

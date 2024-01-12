<?php

require_once "Controller.php";
require_once "./Models/AdminModel.php";

Class ModifyTag extends Controller
{

    public $objModel;
    public $name;

    public function __construct()
    {
        $this->objModel = new AdminModel();
    }
   public function modify()
   {
    $showtag = $this->show();
    if(isset($_GET['id'])){
        $id= $_GET['id'];
        if(isset($_POST['modify']))
        {
            $name = $_POST['tag'];
            $modifytag = $this->objModel->update('tag',['tag'],[$name],"id = $id");
            header('Location: \admin');
        }
    }
    $this->renderview('ModifyTagv',['showtag'=> $showtag ]);
   }
   public function show(){
        $id= $_GET['id'];
        $showtag= $this->objModel->showOneElement('tag', "id = $id");
        return $showtag;
   }

}

$test = new ModifyTag();
$test->modify();
?>

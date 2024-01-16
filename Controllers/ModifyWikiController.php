<?php
require_once "Controller.php";
require_once "./Models/AuthorModel.php";


Class ModifyWikiController extends Controller
{
    public $objModel;
    public $name;

    public function __construct()
    {
        $this->objModel = new AuthorModel();
    }

    public function modify(){

        if(isset($_GET['id'])){
            $id= $_GET['id'];
            if(isset($_POST['modifywiki']))
            {
                $name = $_POST['wiki'];
                $content = $_POST['content'];
                $category = $_POST['category'];
                $tag = $_POST['tag'];

                $modifycategory = $this->objModel->update('category',['name'],[$name],"id = $id");
                header('Location: \admin');
            }
        }

        $showwiki = $this->showwiki();
        $totaltags = $this->showtags();
        $totalcategories =$this->showcategories();
        $this->renderview('ModifywikiV', ['showwiki' => $showwiki,
                                            'totalcategories' => $totalcategories,
                                            'totaltags' => $totaltags]);
    }
    public function showwiki()
    {
        $id= $_GET['id'];
        $showwiki= $this->objModel->showOneWiki('wiki', "id = $id");
        return $showwiki;
    }


    public function showcategories(){
        $totalcategories= $this->objModel->showElement('category');
        return $totalcategories;
    }


    public function showtags()
    {
        $totaltags= $this->objModel->showElement('tag');
        return $totaltags;
    }
    

}

$test = new ModifyWikiController();
$test->modify();

?>
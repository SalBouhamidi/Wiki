<?php


require_once "./Models/HomeModel.php";
require_once "Controller.php";

Class HomeController extends Controller
{
    private $id;
    private $name;
    public $objModel;


    public function __construct()
    {
        $this->objModel = new HomeModel();
    }

    public function home()
    {
            $categories = $this->getCategory();
            $wikis = $this->getWikis();
            $tags = $this->getTag();
            $this->renderview('home', ['categories' => $categories,
                                        'wikis' => $wikis,
                                        'tags'=> $tags ]);
    }

    public function getCategory()
    {
        $categories = $this->objModel->getElements('category','id', '3');
        return $categories;
    }

    public function getTag()
    {
        $tags = $this->objModel->getElements('tag','id', '6');
        return $tags;
    }

 

    public function getWikis(){
        $wikis = $this->objModel->getElementsJoins('wiki.wiki_name','users.fullname', 'wiki', 'users', 'wiki.id_user','users.id', 'wiki.id','4');
        return $wikis;
    }






    
}


$objcontroller = new HomeController();
$objcontroller->home();
?>

<?php

require_once "Controller.php";
require_once "./Models/AuthorModel.php";

Class AddWikiController extends Controller
{
    public $objModel;
    public $name;

    public function __construct()
    {
        $this->objModel = new AuthorModel();
    }

    public function crudWiki()
    {        
        $categories=$this->getCategory();
        $tags= $this->getTag();   
        $this->addWiki();
        $this->renderview('addWiki', ['categories' => $categories,
                                      'tags' => $tags]);

    }

    public function addWiki(){
        if(isset($_POST['addwiki'])){
            $title = $_POST['wiki'];
            $content = $_POST['content'];
            $category = $_POST['category'];
            $id = $_SESSION['id_user'];
            $archive= 0;
            $results = $this->objModel->insert('wiki',['wiki_name', 'content', 'archive', 'id_category', 'id_user'],
                                    [$title,$content,$archive,$category, $id]);
            
            $max = $this->getWiki();
            var_dump($max);
            die();                    
            foreach($_POST['tag_name'] as $tag){
            $wikipivo = $this->objModel->insert('wiki_tag', ['id_wiki', 'id_tag'], [$id,$tag]);
            }
            if(isset($results)){
                header('Location: /author');
            }
            $this->renderview('author');
        }
    }

    public function getCategory(){
        $categories= $this->objModel->showElement('category');
        return $categories;
    }

    public function getWiki(){
        $wikis= $this->objModel->showElement('wiki');
        $max= max();
        return $wikis;
    }

    public function getTag(){
        $tags= $this->objModel->showElement('tag');
        return $tags;
    }

}

$test= new AddWikiController();
$test->crudWiki();
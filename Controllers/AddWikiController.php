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
            
            foreach($_POST['tag_name'] as $tag){
            $lastwiki = $this->getLastWiki();
            $wikipivo = $this->objModel->insert('wiki_tag', ['id_wiki', 'id_tag'], [$lastwiki,$tag]);
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

    public function getLastWiki(){
        $wikis= $this->objModel->showElement('wiki');
        $lastwiki= max($wikis);
        $lastidwiki=$lastwiki['id'] ;
        return $lastidwiki;
    }

    public function getTag(){
        $tags= $this->objModel->showElement('tag');
        return $tags;
    }

}

$test= new AddWikiController();
$test->crudWiki();
<?php
    require_once "./Config/Connectdb.php";
    
    Class WikiDetailsModel{

        public $connect;
        private $connection;

        public function __construct()
        {
            $this->connection= new Connectdb();
        }
        public function Wikidetails($id)
        {
            $connect= $this->connection->connexion();
            $statement=$connect->prepare("SELECT wiki.wiki_name, wiki.content, tag.tag, category.name, users.fullname 
                                        FROM `wiki_tag` 
                                        INNER JOIn `tag` ON wiki_tag.id_tag = tag.id
                                        INNER JOIN `wiki` ON wiki_tag.id_wiki = wiki.id
                                        INNER JOIN `category` ON wiki.id_category = category.id
                                        INNER JOIN `users` ON wiki.id_user = users.id
                                        where wiki.id = $id");

            $statement->execute();
            $results = $statement->fetchALL();
            return $results;
        }


    }

    
?>

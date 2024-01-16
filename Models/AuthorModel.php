<?php
require_once "./Config/Connectdb.php";


Class AuthorModel {

    private $connectionobj;
    public $connect;

    public function __construct()
    {
        $this->connectionobj= new Connectdb();    
    }

    public function showWiki($table, $condition)
    {
        $connect= $this->connectionobj->connexion();
        $stmt= $connect->prepare("SELECT * FROM `{$table}` WHERE {$condition}");
        $stmt->execute();
        $results = $stmt->fetchAll();
        return $results;
    }

    public function showOneWiki($table, $condition)
    {
        $connect= $this->connectionobj->connexion();
        $stmt= $connect->prepare("SELECT * FROM `{$table}` WHERE {$condition}");
        $stmt->execute();
        $results = $stmt->fetch();
        return $results;
    }

    public function delete($table, $condition)
    {
        $connect= $this->connectionobj->connexion();
        $deleterequete= $connect->prepare("DELETE FROM `{$table}` WHERE {$condition}");
        $deleterequete->execute();
        return $deleterequete;
    }

    public function showElement($table)
    {
        $connect= $this->connectionobj->connexion();
        $stmt= $connect->prepare("SELECT * FROM `{$table}`");
        $stmt->execute();
        $results = $stmt->fetchAll();
        return $results;
    }

     public function insert($table, $attributes, $values)
     {
         $arrtimploded= implode("`,`",$attributes );
         $valuesimploded= implode("','",$values);
         $connect= $this->connectionobj->connexion();
         $stmt= $connect->prepare("INSERT INTO `$table` (`{$arrtimploded}`) VALUES ('{$valuesimploded}')");
         $stmt->execute();
         return $stmt;
      }

      public function showTagJoin($id)
      {
        $connect= $this->connectionobj->connexion();
        $stmt= $connect->prepare("SELECT * FROM `tag` 
        INNER Join `wiki_tag` ON tag.id = wiki_tag.id_tag
        where wiki_tag.id_wiki= $id");
        $stmt->execute();
        $results = $stmt->fetch();
        return $results;
      }

      public function updateWiki(){
        $connect= $this->connectionobj->connexion();
        $stmt= $connect->prepare("
        
        ");

      }





}
?>
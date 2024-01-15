<?php
require_once "./Config/Connectdb.php";


Class AuthorModel {

    private $connectionobj;
    public $connect;

    public function __construct()
    {
        $this->connectionobj= new Connectdb();    }

    public function showWiki($table, $condition)
    {
        $connect= $this->connectionobj->connexion();
        $stmt= $connect->prepare("SELECT * FROM `{$table}` WHERE {$condition}");
        $stmt->execute();
        $results = $stmt->fetchAll();
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
        //  var_dump($stmt);
        //  die();
         $stmt->execute();
         return $stmt;
      }





}
?>
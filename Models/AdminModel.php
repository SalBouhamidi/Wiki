<?php
require_once "./Config/Connectdb.php";

Class AdminModel{

    private $connectionobj;
    public $connect;

    public function __construct()
    {
            $this->connectionobj= new Connectdb();
    }

    public function showElement($table){
        $connect= $this->connectionobj->connexion();
        $stmt= $connect->prepare("SELECT * FROM `{$table}`");
        $stmt->execute();
        $results = $stmt->fetchAll();
        return $results;
    }
    public function showOneElement($table, $condition){
        $connect= $this->connectionobj->connexion();
        $stmt= $connect->prepare("SELECT * FROM `{$table}` where $condition");
        $stmt->execute();
        $results = $stmt->fetch();
        return $results;
    }

    public function showElementJoin($table1,$table2, $att1,$att2,$order, $as){
        $connect= $this->connectionobj->connexion();
        $stmt=$connect->prepare("SELECT $order AS $as, $table1.*, $table2.*
                                FROM `{$table1}`
                                INNER JOIN `{$table2}` ON $att1 = $att2");
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

     public function delete($table, $condition){
        $connect= $this->connectionobj->connexion();
        $deleterequete= $connect->prepare("DELETE FROM `{$table}` WHERE {$condition}");
        $deleterequete->execute();
        return $deleterequete;
     }

    public function update($table, $attributes, $values,$condition){
        $arrtimploded= implode("`,`",$attributes );
       
        $valuesimploded= implode("','",$values);
        $connect= $this->connectionobj->connexion();
        $stmt= $connect->prepare("UPDATE `$table` SET `{$arrtimploded}`='{$valuesimploded}' WHERE {$condition}");    
        $stmt->execute();
        return $stmt;
     }

    
}


?>
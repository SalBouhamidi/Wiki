<?php
require_once "./Config/Connectdb.php";

class HomeModel{
    private $connectionobj;
    public $connect;

    public function __construct()
    {
        $this->connectionobj= new Connectdb();
    }

    public function getElements($table, $att,$repeat)
    {
        $connect= $this->connectionobj->connexion();
        $stmt=$connect->prepare("SELECT * from `{$table}` 
                                        ORDER By `{$att}` DESC 
                                        LIMIT $repeat
                                        ");
        $stmt->execute();
        $results = $stmt->fetchAll();
        return $results;
    }


    public function getElementsJoins($table1,$table2, $att1,$att2,$order, $as,$repeat,$condition){
        $connect= $this->connectionobj->connexion();
        $stmt=$connect->prepare("SELECT $order AS $as, $table1.*, $table2.*
                                FROM `{$table1}`
                                INNER JOIN `{$table2}` ON $att1 = $att2
                                WHERE $condition
                                ORDER By $as  DESC 
                                LIMIT $repeat");
       
                                
        $stmt->execute();
        $results = $stmt->fetchAll();
        return $results;
    }


}

?>
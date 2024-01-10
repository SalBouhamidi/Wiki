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


    public function getElementsJoins($att1,$att2,$table1,$table2, $att3,$att4,$att5,$repeat){
        $connect= $this->connectionobj->connexion();
        $stmt=$connect->prepare("SELECT $att1, $att2
                                FROM `{$table1}`
                                INNER JOIN `{$table2}` ON $att3 = $att4
                                ORDER By $att5 DESC 
                                LIMIT $repeat");
        

        $stmt->execute();
        $results = $stmt->fetchAll();
        return $results;
    }


}

?>
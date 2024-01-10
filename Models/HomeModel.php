<?php
require_once "./Config/Connectdb.php";

class HomeModel{
    private $connectionobj;
    public $connect;
    public function __construct()
    {
        $this->connectionobj= new Connectdb();
    }
    public function getElements($table, $att,$repeat){
        $implodedatt= implode("`,`",$att);
        $connect= $this->connectionobj->connexion();
       
        $stmt=$this->connect->prepare("SELECT * from {$table} 
                                        ORDER By (`{$implodedatt}`) DESC 
                                        LIMIT $repeat");
         var_dump($stmt);
         die();

        $stmt->execute();
        $results = $stmt->fetchAll();
        return $results;
    }


}

?>
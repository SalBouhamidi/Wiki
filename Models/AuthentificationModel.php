<?php
require_once "./Config/Connectdb.php";

class AuthentificationModel{
    private $connectobj;
    public function __construct(){
        $this->connectobj = new Connectdb();
    }
    public function RegisterRequete($table, $attributes,$values){
        $implodedatt= implode("`,`",$attributes);
        $impvalues=implode("','",$values);
        $connectdatab= $this->connectobj->connexion();
        $requete ="INSERT INTO `$table` (`{$implodedatt}`) VALUES ('{$impvalues}')";
        $rslt= $connectdatab->prepare($requete);
        // var_dump($rslt);
        // die();
        $rslt->execute();
        return $requete;
}
    public function login($table, $condition1, $condition2){
        //SELECT * FROM `users` WHERE users.email = "kari@mailinator.com" && users.pwd = "123";
        $connex=$this->connectobj->connexion();
        $requete= "SELECT * FROM `$table` WHERE {$condition1} && {$condition2}";
        $result= $connex->prepare($requete);
        $result->execute();
        $finalresult = $result->fetch(PDO::FETCH_ASSOC);
        return $finalresult;

    }
}





?>
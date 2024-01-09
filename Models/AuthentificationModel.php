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
        var_dump($rslt);
        $rslt->execute();
        return $requete;
}
}





?>
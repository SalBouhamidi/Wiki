<?php

class Connectdb{
    private $host= "localhost";
    private $name= "root";
    private $pwd= "";
    private $dbname="wiki";
    protected $connect;

    public function __construct(){
        try{
            $this->connect= new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->name, $this->pwd);
            // echo "done";
            
        }catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }

    }
    public function connexion(){
        return $this->connect;
    }
   
    
}
$test= new Connectdb;
$test->connexion();

?>
<?php
    require_once "./Config/Connectdb.php";
    
    Class WikiDetailsModel{

        public function __construct(){
            $connect= new Connectdb();
        }

        
    }


    $test = new WikiDetailsModel();
    
?>

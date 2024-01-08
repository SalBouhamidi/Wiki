<?php

Class Request{
    
    public function test($value){
        echo "<pre>";
        var_dump($value);
        echo "<\pre>";
        die();
        
    }
    public function uri($value){
        return $_SERVER['REQUEST_URI'] === $value;
    }

}



?>
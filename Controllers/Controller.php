<?php
    class Controller{

        protected function renderview($view, $data = []){
            extract($data);
            require_once "./views/$view.php";
        }
    }


?>
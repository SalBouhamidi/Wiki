<?php
    class Controller{

        protected function renderview($view, $data = []){
            extract($data);
            require_once "./views/$view.php";
        }

        protected function validationform($data){
            $data=trim($data);
            $data=htmlspecialchars($data);
            $data=addslashes($data);
            return $data;
        }
    }


?>
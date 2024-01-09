<?php
    require_once "includes/navbar.php";
    ob_start();
?>
<h5 class="d-flex justify-content-center mt-5">Page Not found! the url is not right again !</h5>




<?php 
$content = ob_get_clean();
require "layout.php";

?>

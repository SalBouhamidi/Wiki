<?php
include "includes/navbar.php";
ob_start();
?>
<h1>author part</h1>



<?php 
$content =ob_get_clean();
require "layout.php";
?>
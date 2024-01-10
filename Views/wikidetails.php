<?php
    include "includes/navbar.php";
    session_start();
    ob_start();
?>

<h3 class="m-5">Title : How to learn testing ur own project</h3>





<?php 
// include "includes/footer.php";
$content =ob_get_clean();
require "layout.php";
?>
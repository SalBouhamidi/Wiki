<?php
    include "includes/navbar.php";
    ob_start();
?>




<?php
// include_once "includes/footer.php";
$content= ob_get_clean();
require_once "layout.php";


?>
<?php
    include "includes/navbar.php";
    ob_start();
?>
<div class="category h-50 w-75 container-fluid pt-4  mt-5">
<form method="POST">
            <div class="mb-3 ">
                <label  class="form-label text-light fw-semibold">Tag :</label>
                <input type="text" name="tag" class="form-control bg-body-secondary">
            </div>
            <div class="d-flex justify-content-center">
            <button type="submit" name="addtag" class="btn rounded-0 text-light fw-semibold px-4 ">Ajouter</button>
            </div>
        </form>

</div>
<?php
$content= ob_get_clean();
require_once "layout.php";
?>
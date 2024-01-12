<?php
include "includes/navbar.php";
ob_start();
?>

<div class="d-flex  ms-4 mt-4">
    <button class= "btn btn-danger text-light fw-bold rounded-0 mb-3">Welcome to Wi<span class="text-dark">ki</span>
    </button>
</div>
<section class="wikies container">
    <div class="d-flex justify-content-between mb-4">
        <p class="fw-bold">Mes wikis : </p>
    </div>


    <div class="d-flex flex-row justify-content-between flex-lg-wrap flex-wrap ">

        <div class="card text-light mb-3" style="width: 18rem;">
            <div class="card-body">
                <p class="card-title fw-bold">Title : </p>
                <a href="" class="btn btn-danger text-light d-flex justify-content-center w-75 ms-4 mb-4">Lire mon Wwiki</a>
                <a href="" class="btn btn-danger text-light d-flex justify-content-center w-75 ms-4">Supprimer</a>

            </div>
        </div>



    </div>

</section>



<?php 
$content =ob_get_clean();
require "layout.php";
?>
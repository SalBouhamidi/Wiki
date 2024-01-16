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
        <a href="<?= $uri = 'author/addWiki'?>" class="btn btn-danger text-light fw-semibold px-4 ">Ajouter un wiki</a>

    </div>


    <div class="d-flex flex-row justify-content-between flex-lg-wrap flex-wrap ">    
        <?php foreach($results as $result) :?>
        <div class="card text-light mb-3" style="width: 18rem;">
            <div class="card-body">
                <p class="card-title fw-bold">Title : <?= $result ["wiki_name"] ;?> </p>
                <a href="<?= $uri = '/author'?>?id=<?php echo $result['id'];?>" class="btn btn-danger text-light d-flex justify-content-center w-75 ms-4 mb-4">Supprimer</a>
                <a href="<?= $uri = '/author/modify'?>?id=<?php echo $result['id'];?>" class="btn btn-danger text-light d-flex justify-content-center w-75 ms-4 ">Modifier</a>
            </div>
        </div>
    <?php endforeach; ?>



    </div>

</section>



<?php 
$content =ob_get_clean();
require "layout.php";
?>
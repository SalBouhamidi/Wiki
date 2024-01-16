<?php
    include "includes/navbar.php";
    ob_start();
?>

<section class="Wikidetails container">
    <h1 class="mt-5 ms-2 text-decoration-underline">Tittle: <?= $results [0]['wiki_name'] ?></h1>
    <p class ="ms-5  fw-medium font-monospace">Fait par:<?= $results [0]['fullname'] ?></p>
    <a href="" class="btn btn-danger text-light fw-semibold px-4 ">Categorie: <?= $results [0]['name'] ?></a>
    <hr>
    <p class= "fs-5">
    <?= $results [0]['content'];?>
    </p>
    <a href="" class="btn btn-danger text-light fw-semibold px-4 ">Les tags utilisés:</a>
    <?php 
        $arrayitemes= count($results);
        for($i= 0; $i<$arrayitemes; $i++){?>
            <p>#<?= $results [$i]['tag']; ?></p>
            <?php }?>
   

    <a href="\" class=" text-dark fw-semibold ">Retour à l'accueil</a>


    

</section>




<?php 
$content =ob_get_clean();
require "layout.php";
?>
<?php
    include "includes/navbar.php";
    ob_start();
?>
<div>
    <form class="d-flex justify-content-center w-100 mt-3" role="search">
            <input class="form-control me-2 w-25" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-danger btn-outline-light" type="submit">Search</button>
    </form>
</div>
<div class="d-flex  ms-4 mt-4">
    <button class= "btn btn-danger text-light fw-bold rounded-0 mb-3">Welcome to Wi<span class="text-dark">ki</span>
    </button>
</div>
<div class="d-flex justify-content-center">
    <img class="img-fluid homepagepng w-50 mb-4" src="../assets/images/homepic.png" alt="">
</div>

<section class="wikies container">
    <div class="d-flex justify-content-between mb-4">
        <p class="fw-bold">Les derniers wikis : </p>
        <a href="" class="btn btn-danger text-light fw-semibold px-4 ">Plus de wikies</a>
    </div>


    <div class="d-flex flex-row justify-content-between flex-lg-wrap flex-wrap ">

    <?php 
    foreach($wikis as $wiki):?>
        <div class="card text-light mb-3" style="width: 18rem;">
            <div class="card-body">
                <p class="card-title fw-bold">Title : <?= $wiki['wiki_name']; ?></p>
                <p class="card-text fw-semibold">Author's name : <?= $wiki['fullname']; ?></p>
                <a href="<?= $uri = '/wikidetails'?>?id=<?php echo $wiki['ASid'];?>" class="btn btn-danger text-light d-flex justify-content-center w-75 ms-4">Lire plus</a>
            </div>
        </div>
    <?php endforeach; ?>



    </div>

</section>
<section class="tags  container">
    <div class="d-flex justify-content-between mb-4">
        <p class="fw-bold">Les derniers Catégories : </p>
        <a href="" class="btn btn-danger text-light fw-semibold px-4 mb-2">Plus de Catégories</a>
    </div>
    
    <?php 
    foreach ($categories as $category):?>
        <div class="d-flex justify-content-center flex-lg-wrap flex-wrap ">
            <a href="" class="btn btn-danger text-light px-5 w-50 mx-2 my-2" ><?= $category['name']; ?></a>
        </div>
    <?php endforeach; ?>
</section>

<section class="tags  container">
    <div class="d-flex justify-content-between mb-4">
        <p class="fw-bold">Les derniers Tags: </p>
        <a href="" class="btn btn-danger text-light fw-semibold px-4">Plus de Tags</a>
    </div>
    
    <?php 
    foreach ($tags as $tag):?>
        <div class="d-flex justify-content-center flex-lg-wrap flex-wrap ">
            <a href="" class="btn btn-danger text-light px-5 w-50 mx-2 my-2" ><?= $tag['tag']; ?></a>
        </div>
    <?php endforeach; ?>
</section>


<?php
include_once "includes/footer.php";
$content= ob_get_clean();
require_once "layout.php";


?>

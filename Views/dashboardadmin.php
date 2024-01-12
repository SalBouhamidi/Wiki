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
        <h4 class="fw-bold">Les statistiques : </h4>
    </div>

    <div class="d-flex flex-row justify-content-between flex-lg-wrap flex-wrap ">
        <div class="card text-light mb-3" style="width: 18rem;">
            <div class="card-body">
                <p class="card-title fw-bold">Les nombres des wikis : <?= count($wikies) ?> </p>
            </div>
        </div>

        <div class="card text-light mb-3" style="width: 18rem;">
            <div class="card-body">
                <p class="card-title fw-bold">Les nombres des categories : <?= count($categories) ?></p>
            </div>
        </div>
        <div class="card text-light mb-3" style="width: 18rem;">
            <div class="card-body">
                <p class="card-title fw-bold">Les nombres des tags : <?= count($tags) ?>  </p>
            </div>
        </div>
    </div>

</section>

<section class="wikies container">
    <div class="d-flex justify-content-between mb-4">
        <h4 class="fw-bold">Les wikis : </h4>
    </div>
    <div class="d-flex flex-row justify-content-between flex-lg-wrap flex-wrap ">
    <?php 
    foreach($wikies as $wiki):?>
        <div class="card text-light mb-3" style="width: 18rem;">
            <div class="card-body">
                <p class="card-title fw-bold">Title : <?= $wiki['wiki_name']; ?></p>
                <p class="card-text fw-semibold">Author's name : <?= $wiki['fullname']; ?></p>
                <a href="<?= $uri = '/wikidetails'?>?id=<?php echo $wiki['ASid'];?>" class="btn btn-danger text-light d-flex justify-content-center w-75 ms-4">Lire plus</a>
                <a href="" class="btn btn-danger text-light d-flex justify-content-center w-75 ms-4">Archiver</a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<section class="tags  container">
    <div class="d-flex justify-content-between mb-4">
        <h4 class="fw-bold">Les Catégories : </h4>
        <a href="/admin/CategoryAdmin" class="btn btn-danger text-light fw-semibold px-4 mb-2">Ajouter une categorie</a>
    </div>
    <?php 
    foreach($categories as $category):?>
    <div class="d-flex justify-content-center flex-lg-wrap flex-wrap ">
        <a href="<?= $uri = '/admin/ModifyCategory'?>?id=<?php echo $category['id'];?>"><button class="btn btn-dark text-light px-5 mx-2 my-2">Modifier</button></a>
        <a href="" class="btn btn-danger text-light px-5 w-50 mx-2 my-2" ><?= $category['name']; ?></a>
        <a href="<?= $uri = '/admin/CategoryAdmin'?>?id=<?php echo $category['id'];?>"><button class="btn btn-dark text-light px-5 mx-2 my-2">Supprimer</button></a>
    </div>
    <?php endforeach; ?>
   
</section>

<section class="tags  container">
    <div class="d-flex justify-content-between mb-4">
        <h4 class="fw-bold">Les Tags : </h4>
        <a href="admin/TagAdmin" class="btn btn-danger text-light fw-semibold px-5 mb-2">Ajouter un tag</a>
    </div>

    <?php 
    foreach($tags as $tag):?>
    <div class="d-flex justify-content-center flex-lg-wrap flex-wrap ">
         <a href="<?= $uri = '/admin/ModifyTag'?>?id=<?php echo $tag['id'];?>"><button class="btn btn-dark text-light px-5 mx-2 my-2">Modifier</button></a>
        <a href="" class="btn btn-danger text-light px-5 w-50 mx-2 my-2" ><?= $tag['tag']; ?></a>
        <a href="<?= $uri = '/admin/TagAdmin'?>?id=<?php echo $tag['id'];?>"><button class="btn btn-dark text-light px-5 mx-2 my-2">Supprimer</button></a>
    </div>
    <?php endforeach; ?>

   
</section>


<?php
include_once "includes/footer.php";
$content= ob_get_clean();
require_once "layout.php";


?>
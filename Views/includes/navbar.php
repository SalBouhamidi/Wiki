<?php 
// session_start();
?>
<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand text-light fw-bold fs-4" href="/">Wi<span class="text-dark">ki</span></a>

    <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavAltMarkup">
      <div class="navbar-nav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active fw-semibold text-light me-5" aria-current="page" href="/">Accueil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link fw-semibold text-light me-5" href="#">Catégories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link fw-semibold text-light me-5" href="#">Tags</a>
      </li>

        <li class="nav-item">
        <a class="nav-link fw-semibold text-light me-5 " href="#">Wikis</a></li>
        <?php  if(isset($_SESSION["email"])){?> 
          <li class="nav-item">
                  <a href="<?= $uri = '/author/logout';?>" class=" btn btn-danger px-4 text-light fw-bold ms-5 me-3">Log out</a>
          </li>

        <?php }?>


         <?php if(!isset($_SESSION["email"])){?> 
          <li class="nav-item"> 
          <a href="<?= $uri = '/login';?>" class=" btn btn-danger px-4 text-light fw-bold ms-5 me-3">Log in</a>
          </li>


         <?php }?>
         </ul>
        
      </div>
    </div>
  </div>
  
</nav>
<?php
    require_once "includes/navbar.php";
    
    ob_start();
?>
 <div class="d-flex justify-content-center mt-4">
    <button class= "btn text-light fw-bold rounded-0 mb-3">Welcome to Wi<span class="text-dark">ki</span></button>
</div>
<div class="w-100 d-flex justify-content-center h-100 mb-3">
    <img class="img-fluid " src="../assets/images/dudereading.png" alt="">
</div>
<div class="register h-50 w-75 container-fluid pt-4 mb-4">
<form method="POST">
            <div class="mb-3 ">
                <label for="exampleInputEmail1" class="form-label text-light fw-semibold">Email address</label>
                <input type="email" name="email" class="form-control bg-body-secondary" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label text-light fw-semibold">Password</label>
                <input type="password" name="password" class="form-control bg-body-secondary" id="exampleInputPassword1">
            </div>
            <div class="d-flex justify-content-center">
            <button type="submit" name="submit" class="btn rounded-0 text-light fw-semibold px-4 ">Log in</button></div>
            
            <p class="d-flex justify-content-end text-light fw-semibold">You don't have an account ?<a class="text-light" href="<?= $uri = '/register';?>">Register here</a></p>
        
            </form>

</div>



<?php 
include "includes/footer.php";
$content =ob_get_clean();
require "layout.php";
?>
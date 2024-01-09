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
<div class="register h-100 w-75 container-fluid pt-4 mb-4">
<form method="post">
            <div class="mb-3 ">
                <label for="exampleInputUsername" class="form-label text-light fw-semibold ">Author’s name</label>
                <input type="text" name="name" class="form-control bg-body-secondary">
            </div>
            <div class="mb-3 ">
                <label for="exampleInputEmail1" class="form-label text-light fw-semibold">Email address</label>
                <input type="email" name="email" class="form-control bg-body-secondary" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label text-light fw-semibold">Password</label>
                <input type="password" name="pwd" class="form-control bg-body-secondary" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label text-light fw-semibold">Reapet Password</label>
                <input type="password" name="repeatpwd" class="form-control bg-body-secondary" id="exampleInputPassword1">
            </div>
            <div class="mb-3 ">
                <label class="form-label text-light fw-semibold ">Role</label>
                <select id="role" name="role" class="w-100 py-2 rounded border-none bg-body-secondary">
                    <option value="<?= 1?>">Author</option>
                    <option value="<?= 2?>">Admin</option>
                </select>
            </div>
            <div class="d-flex justify-content-center">
            <button type="submit" name= "submit"class="btn rounded-0 text-light fw-semibold px-4 ">Sign up</button></div>
            
            <p class="d-flex justify-content-end text-light fw-semibold">Already have an account ?<a class="text-light" href="<?= $uri = '/login';?>">Log in</a></p>
        
            </form>

</div>



<?php 
include "includes/footer.php";
require_once "./Config/Connectdb.php";
$content =ob_get_clean();
require "layout.php";

?>
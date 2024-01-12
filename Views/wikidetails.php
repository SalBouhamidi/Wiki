<?php
    include "includes/navbar.php";
    ob_start();
?>

<section class="Wikidetails container">
    <h1 class="mt-5 ms-2 text-decoration-underline">Tittle: </h1>
    <p class ="ms-5  fw-medium font-monospace">Fait par: </p>
    <a href="" class="btn btn-danger text-light fw-semibold px-4 ">Categorie: Lorem</a>
    <hr>
    <p class= "fs-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam aliquid vero molestias soluta libero! Similique aut libero quod iste eum voluptatum corporis. Sit laborum obcaecati, eos error adipisci quisquam ad? Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, ab? Non corrupti possimus amet sint, magni dicta at quia deserunt ullam exercitationem sapiente. Culpa dolorem quo fugit beatae sequi reiciendis! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Et suscipit voluptatum esse! At temporibus eius id quis inventore, reiciendis animi vel quas adipisci voluptates, iusto, magnam voluptas alias nesciunt ratione. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste exercitationem repellendus recusandae accusamus sint iure ea earum! Reiciendis delectus nam deleniti, voluptatem veniam illo earum sint ab tenetur eos laboriosam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime rem consequatur veritatis modi quae facilis nulla enim assumenda explicabo delectus exercitationem in aliquam dignissimos aperiam quisquam illo, repudiandae inventore. Recusandae! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, soluta. Asperiores quia, pariatur ipsa mollitia exercitationem nihil voluptas voluptates molestias vel aspernatur, suscipit quas commodi architecto eaque? Cupiditate, aperiam? Itaque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, placeat? Iure dignissimos voluptatum sapiente labore molestiae architecto sequi officiis ipsam a eius! Excepturi fuga nemo ipsum delectus neque debitis placeat! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae, similique perferendis aspernatur sit nulla inventore asperiores veniam magnam, voluptas quo eius! Possimus quis unde ipsum, fugiat aspernatur cum expedita Lorem 
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic error perspiciatis atque deserunt officia cumque, distinctio minus ut non. Obcaecati ab harum enim maiores? Repudiandae ipsam beatae sapiente quo atque! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis veritatis quo vero totam deleniti ad quasi iste itaque quaerat magnam, repellendus odio, sint blanditiis, maiores est tempore nisi sed odit!
    </p>
    <a href="" class="btn btn-danger text-light fw-semibold px-4 ">Les tags utilisés:</a>
    <p>#Lorem  #Marketing  #Test</p>

    <a href="\" class=" text-dark fw-semibold  ">Retour à l'accueil</a>


    

</section>




<?php 
$content =ob_get_clean();
require "layout.php";
?>
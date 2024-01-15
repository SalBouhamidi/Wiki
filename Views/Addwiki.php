
<?php
    include "includes/navbar.php";
    ob_start();
?>
<div class="category  w-75 container-fluid pt-4 pb-2 mt-5">
<form method="POST">
            <div class="mb-3 ">
                <label  class="form-label text-light fw-semibold">Wiki</label>
                <input type="text" name="wiki" class="form-control bg-body-secondary">
            </div>
            <div class="mb-3 ">
                <label  class="form-label text-light fw-semibold">Content</label>
                <input type="text" name="content" class="form-control bg-body-secondary">
            </div>
            <div class="mb-3 ">
                <label  class="form-label text-light fw-semibold w-100">Category</label>
                 <select name="category" id="category" class="w-100 bg-body-secondary py-2 ">
                    <?php foreach($categories as $category){?>
                    <option name="category" value="<?= $category['id']?>"><?= $category['name'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="mb-3 ">
                <label  class="form-label text-light fw-semibold w-100" name="choices[]">Tags</label>
                 <?php foreach($tags as $tag){?>
                    <input type="checkbox" name="tag_name[]" value="<?= $tag['id']?>">
                    <label for="tag" class="text-light"><?= $tag['tag'] ?></label><br>
                    <?php } ?>
                </select>
            </div>
            <div class="d-flex justify-content-center">
            <button type="submit" name="addwiki" class="btn rounded-0 text-light fw-semibold px-4 ">Ajouter</button>
            </div>
        </form>
</div>
<?php
$content= ob_get_clean();
require_once "layout.php";
?>
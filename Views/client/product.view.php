<?php
$product = $data['product'];
$Product = $data['productClass'];
$name = $product[0]["name"];
$img = $product[0]["img"];
$desc = $product[0]["body"];
$price = $product[0]["price"];
$category = $Product->getProductCategory($product[0]["category_id"]);
$category_name = $category[0]["name"];
?>

<div class="container flex-wrap flex align-start gap-4 p-section">
    <img class="product__img" src="<?= $img ?>">
    <div class="flex flex-column gap-1 align-start">
        <small><?= $category_name ?></small>
        <h2><?= $name ?></h2>
        <p class="product__desc"><?= $desc ?></p>
        <h1>$<?= $price ?></h1>
        <form method="post">
            <button type="submit" name="add-to-cart" class="btn-primary">Add to Cart</button>
        </form>
    </div>
</div>
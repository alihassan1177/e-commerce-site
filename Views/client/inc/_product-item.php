<div class="product-item flex flex-column gap-1">
    <img src="<?= $post_img ?>">
    <p class="d-none" data-id><?= $post_id ?></p>
    <div class="product-head flex flex-column gap-sm">
        <small data-category><?= $category_name ?></small>
        <strong data-name class="font-body"><?= $post_title ?></strong>
    </div>
    <h2 data-price>$<?= $post_price ?></h2>
    <form method="post">
        <input type="hidden" name="id" value="<?= $post_id ?>">
        <input type="hidden" name="title" value="<?= $post_title ?>">
        <input type="hidden" name="price" value="<?= $post_price ?>">
        <input type="hidden" name="category" value="<?= $category_name ?>">
        <input type="hidden" name="img" value="<?= $post_img ?>">
        <button type="submit" name="add-to-cart" data-add-cart class="btn-primary-outline text-center">Add to Cart <i class="fa-solid fa-basket-shopping"></i></button>
    </form>
    <a href="./products.php?id=<?= $post_id ?>" class="btn-primary text-center">View Product <i class="fa-solid fa-eye"></i></a>
</div>
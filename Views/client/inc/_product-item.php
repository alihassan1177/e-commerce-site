<div class="product-item flex flex-column gap-1">
    <img src="<?= $post_img ?>">
    <div class="product-head flex flex-column gap-sm">
        <small data-category><?= $category_name ?></small>
        <strong data-name class="font-body"><?= $post_title ?></strong>
    </div>
    <h2 data-price>$<?= $post_price ?></h2>
    <a class="btn-primary-outline text-center">Add to Cart <i class="fa-solid fa-basket-shopping"></i></a>
    <a class="btn-primary text-center">View Product <i class="fa-solid fa-eye"></i></a>
</div>
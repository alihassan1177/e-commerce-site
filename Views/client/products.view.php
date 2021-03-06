<section class="searchbar">
    <div class="flex gap-1 flex-column align-start container">
        <h3>Search Products</h3>
        <input data-search type="search">
    </div>
</section>
<section class="products-page">
    <div class="p-section container flex flex-column align-center gap-4">
        <div class="flex align-center gap-1 flex-column">
            <h2>Products</h2>
            <p>Shop Our Best products</p>
        </div>
        <div data-products class="product-grid">
            <?php
            $posts = $data['products'];
            $Product = $data['productClass'];
            foreach ($posts as $post) {
                $post_id = $post['id'];
                $post_title = $post['name'];
                $post_img = $post['img'];
                $post_price = $post['price'];
                $post_body = $post['body'];
                $post_category = $post['category_id'];
                $product_category = $Product->getProductCategory($post_category);
                $category_name = $product_category[0]['name'];
                include "./Views/client/inc/_product-item.php";
            } ?>
        </div>
    </div>
</section>

<script src="<?= JS ?>/client/productSearch.js"></script>
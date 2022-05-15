<section class="searchbar">
    <div class="flex gap-1 flex-column align-start container">
        <h3>Search Products</h3>
        <input data-search type="search">
    </div>
</section>
<section class="products-page">
    <div class="container flex flex-column align-center gap-4">
        <div class="flex align-center gap-1 flex-column">
            <h2>Products</h2>
            <p>Shop Our Best products</p>
        </div>
        <div data-products class="product-grid">
            <?php
            $products = $data['products'];
            $Product = $data['productClass'];
            foreach ($products as $product) {
                include "./Views/client/inc/_product-item.php";
            } ?>
        </div>
    </div>
</section>

<script src="<?= JS ?>/client/productSearch.js"></script>
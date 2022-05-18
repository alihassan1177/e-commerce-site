<section class="cart-sidebar slide-out flex flex-column align-start space-between">

    <div class="flex space-between align-center w-100">
        <h2>Cart</h2>
        <a data-cart-close class="btn-primary-outline cursor-pointer">Close</a>
    </div>
    <div class="cart-items flex flex-column align-start gap-2">

        <?php

        if (isset($_SESSION['cart'])) {
            # code...
            $cart_products = $_SESSION["cart"];
            foreach ($cart_products as $cart_product) {
                $image = $cart_product['img'];
                $title = $cart_product['title'];
                $product_price = $cart_product['price'];
                echo <<<HTML
                    <div class="cart-item flex gap-1 align-center">
                        <img src="$image" class="cart-item__img">
                        <div class="flex flex-column align-start gap-1-5">
                        <p>$title</p>
                        <h3>$$product_price</h3>
                        <a class="btn-primary-outline" href="">Remove Item</a>
                        </div>
                        </div>        
                    HTML;
            }
        }

        ?>



    </div>
    </div>
    <a class="btn-primary" href="">Checkout</a>

</section>
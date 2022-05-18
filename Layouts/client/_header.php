<header class="header flex space-between align-center">
    <a href="" class="logo">
        <h2>Ecommerce</h2>
    </a>
    <nav>
        <ul class="flex align-center gap-4">
            <li><a href="./index.php">Home</a></li>
            <li><a href="./products.php">Products</a></li>
            <li>
                <div class="dropdown flex flex-column gap-2">
                    <a class="dropdown-menu-btn">Category <i class="fa-solid fa-caret-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="./products.php?category=casual">Casual Wears</a></li>
                        <li><a href="./products.php?category=suits">Men's Suits</a></li>
                        <li><a href="./products.php?category=jackets">Jackets</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="./post.php">Blog</a></li>
            <li><a class="cursor-pointer flex gap-1" data-cart-toggle>Cart <div style="color: white;" class="circle flex align-center justify-center"><?php echo $n = (isset($_SESSION['cart'])) ? count($_SESSION['cart']) : 0; ?></div> </a></li>

            <?php

            if (isset($_SESSION['user_id'])) {
                echo <<<html
                            <li><a class="btn-primary-outline" href="./user-profile.php">User Profile</a></li>
                            html;
            } else {
                echo <<<html
                    <div class="flex gap-2 align-center">
                        <li><a class="btn-primary-outline" href="./login.php">Login</a></li>
                        <li><a class="btn-primary" href="./register.php">Register</a></li>
                    </div>
                html;
            }
            ?>
        </ul>
    </nav>
</header>
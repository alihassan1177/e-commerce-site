<?php
$blogs = $data['blogs'];
?>

<section class="hero">
    <div class="container">
        <div class="hero__content flex align-center gap-4">
            <div class="hero__left flex flex-column gap-2 align-start">
                <span> <strong>Since 1997</strong> </span>
                <h1 class="hero__heading">Buy Elegant and Affordable Men's Wear</h1>
                <p class="hero__sub-heading">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quas eum nobis. Placeat corrupti maxime impedit earum explicabo quasi, ratione ullam sunt excepturi quod eveniet.</p>
                <a class="btn-primary" href="">Shop Now</a>
            </div>
            <div class="hero__right">
                <img src="./Assets/img/male-model.jpg" alt="Man in a Suit">
            </div>
        </div>
    </div>
</section>

<section class="category">
    <div class="container flex flex-column gap-4 align-center">
        <div class="flex gap-1 flex-column align-center">
            <h2 class="text-center">Category</h2>
            <p>Shop our Featured Categories</p>
        </div>
        <div class="category-grid">
            <div class="category-item"></div>
            <div class="category-item"></div>
            <div class="category-item"></div>
        </div>
    </div>
</section>

<section class="product">
    <div class="container flex flex-column align-center gap-4">
        <div class="flex flex-column align-center gap-1">
            <h2 class="text-center">Products</h2>
            <p>Shop our Featured Products</p>
        </div>
        <div class="product-grid">
            <?php
            for ($i = 0; $i < 8; $i++) {
                echo <<<HTML
                    <div class="product-item flex flex-column gap-1">
                        <img src="./Assets/img/male-model.jpg">
                        <div class="product-head flex flex-column gap-sm">
                            <small>Category name</small>
                            <strong class="font-body">Product Name</strong>
                        </div>
                        <h2>$45</h2>
                        <a class="btn-primary-outline text-center">Add to Cart <i class="fa-solid fa-basket-shopping"></i></a>
                        <a class="btn-primary text-center">View Product <i class="fa-solid fa-eye"></i></a>
                    </div>
                    HTML;
            }
            ?>
        </div>
        <a href="" class="btn-primary">More Products <i class="fa-solid fa-arrow-right"></i></a>
    </div>
</section>

<section class="blog">
    <div class="flex flex-column gap-4 container align-center">
        <div class="flex flex-column align-center gap-1">
            <h2>Blog</h2>
            <p>Read Our Latest Blogs</p>
        </div>
        <div class="product-grid">
            <?php
            $blogs_len = count($blogs);
            for ($i = 0; $i < $blogs_len; $i++) {
                $title = $blogs[$i]['title'];
                $body = $blogs[$i]['body'];
                $img = $blogs[$i]['img'];
                echo (<<<HTML
                        <div class="product-item flex flex-column gap-2 blog-item">
                            <img src="$img" alt="">
                            <div class="flex flex-column gap-sm align-start">
                                <strong class="blog-title">$title</strong>
                                <p class="blog-details">$body</p>
                            </div>
                            <a href="" class="btn-primary-outline text-center">Learn More</a>
                        </div>  
                    HTML);
            }
            ?>
        </div>
    </div>
</section>

<section class="about">
    <div class="container flex flex-column gap-4 align-center">
        <div class="flex flex-column align-center gap-1">
            <h2>Who We Are?</h2>
            <p>Learn About our Company</p>
        </div>
        <div class="flex space-between gap-4 about-content">
            <div class="about__left flex flex-column align-start gap-3">
                <div>
                    <strong>About Us</strong>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati eaque, nobis perspiciatis maiores dolores expedita in possimus nisi voluptas numquam quos voluptatibus debitis reiciendis nulla qui voluptates mollitia, quibusdam error!</p>
                </div>
                <div> <strong>Our Goals</strong>
                    <ul class="goals">
                        <li>Customer Satisfaction</li>
                        <li>High Quality Production</li>
                        <li>Consumer's Values</li>
                    </ul>
                </div>
                <a href="" class="btn-primary-outline">Learn More</a>
            </div>
            <div class="about__right flex flex-column flex-wrap gap-2 align-center">
                <img src="https://cdn.pixabay.com/photo/2020/07/05/07/14/business-man-5371914_1280.jpg" alt="">
                <strong>Owner of Company</strong>
            </div>
        </div>
    </div>
</section>

<?php require './Views/client/inc/_contact-form.php'; ?>
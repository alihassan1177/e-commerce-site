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
            $products = $data["products"];
            $Product = $data["productClass"];
            foreach ($products as $post) {
                $post_id = $post['id'];
                $post_title = $post['name'];
                $post_img = $post['img'];
                $post_price = $post['price'];
                $post_body = $post['body'];
                $post_category = $post['category_id'];
                $product_category = $Product->getProductCategory($post_category);
                $category_name = $product_category[0]['name'];
                include "./Views/client/inc/_product-item.php";
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
                $post_id = $blogs[$i]['id'];
                $title = $blogs[$i]['title'];
                $slug = str_replace(" ", "-", strtolower($title));
                $body = $blogs[$i]['body'];
                $img = $blogs[$i]['img'];
                echo (<<<HTML
                        <div class="product-item flex flex-column gap-2 blog-item">
                            <img src="$img" alt="">
                            <div class="flex flex-column gap-sm align-start">
                                <strong class="blog-title">$title</strong>
                                <p class="blog-details">$body</p>
                            </div>
                            <a href="./post.php?post_name={$slug}&id={$post_id}" class="btn-primary-outline text-center">Learn More</a>
                        </div>  
                    HTML);
            }
            ?>
        </div>
        <p class="text-center"><a href="./post.php" class="btn-primary-outline">View More</a></p>
    </div>
</section>

<section id="about" class="about">
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
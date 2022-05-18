<?php

require_once './Inc/Header.php';

if (isset($_POST["add-to-cart"])) {
    if (!isset($_SESSION['user_id'])) {
        echo "You must login before using cart <a href='./login.php'>Login</a>";
        exit;
    }
    $product = [
        'id' => $_POST['id'],
        'title' => $_POST['title'],
        'img' => $_POST['img'],
        'category' => $_POST['category'],
        'price' => $_POST['price'],
    ];
    if (isset($_SESSION['cart']) && count($_SESSION['cart']) != 0) {
        $cols = array_column($_SESSION["cart"], "id");
        if (in_array($product["id"], $cols)) {
            echo "<script>alert('Product Already exists in Cart')</script>";
        } else {
            $_SESSION["cart"][] = $product;
        }
    } else {
        $_SESSION["cart"][] = $product;
    }
}

$layout = $app->layout->getClientLayout();
$content = $app->layout->getPageContent(
    'client/home.view.php',
    [
        "blogs" => $app->blog->getLatestBlogs(),
        "products" => $app->product->getLatestProducts(),
        "productClass" => $app->product
    ]
);
echo $app->layout->createPage("Home", $content, $layout);

<?php

require "./Inc/Header.php";

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
            // header("location:./products.php");
        } else {
            $_SESSION["cart"][] = $product;
        }
    } else {
        $_SESSION["cart"][] = $product;
    }
}

if (isset($_GET['id'])  && $_GET['id'] != null) {
    $product = $app->product->singleProduct($_GET['id']);
    $layout = $app->layout->getClientLayout();
    $content = $app->layout->getPageContent('client/product.view.php', ["product" => $product, "productClass" => $app->product]);
    echo $app->layout->createPage("Product", $content, $layout);
} else {
    $products = $app->product->all();
    $layout = $app->layout->getClientLayout();
    $content = $app->layout->getPageContent('client/products.view.php', ["products" => $products, "productClass" => $app->product]);
    echo $app->layout->createPage("Products", $content, $layout);
}

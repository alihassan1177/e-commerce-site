<?php

require "./Inc/Header.php";

if (isset($_GET['id'])  && $_GET['id'] != null) {
    $app->helpers->print_array($app->product->singleProduct($_GET['id']));
} else {
    $products = $app->product->all();
    $layout = $app->layout->getClientLayout();
    $content = $app->layout->getPageContent('client/products.view.php', ["products" => $products, "productClass" => $app->product]);
    echo $app->layout->createPage("Products", $content, $layout);
}

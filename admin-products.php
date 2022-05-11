<?php

require "./Inc/Header.php";

$products = $app->product->all();
if (!$app->user->getAuth()) {
    header("location:./index.php");
} else {
    $current_user = $app->user->getLoggedUser();
    $role = $current_user[0]['role'];
    if ($role != "admin") {
        header("location:./index.php");
    } else {
        $layout = $app->layout->getAdminLayout();
        $content = $app->layout->getPageContent('admin/product.view.php', ["products" => $products, "productClass" => $app->product]);
        echo $app->layout->createPage("Products", $content, $layout);
    }
}

// if (isset($_POST['create-post'])) {
//     $app->blog->createPost($_POST['title'], $_POST['body'], $_FILES['img']);
// }

// if (isset($_GET['id']) && $_GET['id'] != null) {
//     $app->blog->delete($_GET['id']);
//     header("location:./blog.php");
// }

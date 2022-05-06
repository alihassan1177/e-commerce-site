<?php

require_once './Inc/Header.php';

if (!$app->user->getAuth()) {
    header("location:./login.php");
}

$layout = $app->layout->getClientLayout();
$content = $app->layout->getPageContent(
    'client/home.view.php',
    [
        "users" => $app->user->all(),
        "products" => $app->product->all()
    ]
);
echo $app->layout->createPage("Home", $content, $layout);

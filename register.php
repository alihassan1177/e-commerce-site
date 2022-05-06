<?php

require_once './Inc/Header.php';

if ($app->user->getAuth()) {
    header("location:./index.php");
}

if (isset($_POST['submit'])) {
    $app->user->register($_POST['name'], $_POST['email'], $_POST['password']);
}

$layout = $app->layout->getAuthLayout();
$content = $app->layout->getPageContent('auth/register.view.php');
echo $app->layout->createPage("Register", $content, $layout);

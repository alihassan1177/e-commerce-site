<?php
require_once './Inc/Header.php';

if ($app->user->getAuth()) {
    header("location:./index.php");
}

if (isset($_POST['submit'])) {
    $app->user->login($_POST['email'], $_POST['password']);
}

$layout = $app->layout->getAuthLayout();
$content = $app->layout->getPageContent('auth/login.view.php');
echo $app->layout->createPage("Login", $content, $layout);

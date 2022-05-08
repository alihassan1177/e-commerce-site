<?php

require "./Inc/Header.php";

if (!$app->user->getAuth()) {
    header("location:./index.php");
} else {
    $current_user = $app->user->getLoggedUser();
    $role = $current_user[0]['role'];
    if ($role != "admin") {
        header("location:./index.php");
    } else {
        $layout = $app->layout->getAdminLayout();
        $content = $app->layout->getPageContent('admin/dashboard.view.php');
        echo $app->layout->createPage("Dashboard", $content, $layout);
    }
}

<?php

require_once './Inc/Header.php';

$layout = $app->layout->getClientLayout();
$content = $app->layout->getPageContent(
    'client/home.view.php',
    [
        "blogs" => $app->blog->getLatestBlogs()
    ]
);
echo $app->layout->createPage("Home", $content, $layout);

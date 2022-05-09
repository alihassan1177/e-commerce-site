<?php

require "./Inc/Header.php";

if (isset($_GET['id']) && isset($_GET['post_name']) && $_GET['id'] != null && $_GET['post_name'] != null) {
    $app->helpers->print_array($app->blog->singlePost($_GET['id']));
} else {
    $app->helpers->print_array($app->blog->all());
}

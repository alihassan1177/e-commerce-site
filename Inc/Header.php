<?php

require './App/Application.php';
$app = new Application;
session_start();

define('SERVER_NAME', $app->config->server_name);
define('PROTOCOL', $app->config->protocol);
define('SITE_NAME', $app->config->site_name);

$path = PROTOCOL . "://" . SERVER_NAME . "/ecommerce";

define('ROOT', $path);
define('IMAGES', str_replace("ecommerce", "ecommerce/Assets/img", $path));
define('CSS', str_replace("ecommerce", "ecommerce/Assets/css", $path));
define('JS', str_replace("ecommerce", "ecommerce/Assets/js", $path));
define('LAYOUTS', str_replace("ecommerce", "ecommerce/Layouts", $path));

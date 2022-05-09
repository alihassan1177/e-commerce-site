<?php

require './App/Database.php';
require './App/Model.php';
require './App/Product.php';
require './App/User.php';
require './App/Blog.php';
require './App/Layout.php';
require './App/Helpers.php';
require './App/Config.php';

class Application
{
    public $config;
    public $db;
    public $user;
    public $product;
    public $blog;
    public $layout;
    public $helpers;

    public function __construct()
    {
        $this->config = new Config;
        $this->db = new Database;
        $this->product = new Product($this->db);
        $this->user = new User($this->db);
        $this->blog = new Blog($this->db);
        $this->layout = new Layout;
        $this->helpers = new Helpers;
    }
}

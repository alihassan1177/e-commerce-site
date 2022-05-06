<?php

require './App/Database.php';
require './App/Model.php';
require './App/Product.php';
require './App/User.php';
require './App/Layout.php';

class Application
{
    public $db;
    public $user;
    public $product;
    public $layout;

    public function __construct()
    {
        $this->db = new Database;
        $this->product = new Product($this->db);
        $this->user = new User($this->db);
        $this->layout = new Layout;
    }
}

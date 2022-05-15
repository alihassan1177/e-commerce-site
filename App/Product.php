<?php

class Product extends Model
{
    public function createProduct(string $title, string $body, array $img, int $price, int $category_id)
    {
        $img_name = rand(0, 99999) . $img['name'];
        move_uploaded_file($img['tmp_name'], "./Assets/img/products/{$img_name}");
        $img_path = "http://localhost/ecommerce/Assets/img/products/{$img_name}";
        $arr = [
            "title" => "'{$title}'",
            "img" => "'{$img_path}'",
            "body" => "'{$body}'",
            "price" => "'{$price}'",
            "category_id" => "'{$category_id}'",
        ];
        $this->db->query("INSERT INTO `products`(`name`, `body`, `img`, `category_id`, `price`) VALUES (" . $arr['title'] . "," . $arr['body'] . "," . $arr['img'] . "," . $arr['category_id'] . "," . $arr['price'] . ")");
        header("location:./admin-products.php");
    }
    public function all()
    {
        return $this->read('products');
    }

    public function getProductCategory(int $id)
    {
        return $this->getById($id, "categories");
    }
}

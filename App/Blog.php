<?php

class Blog extends Model
{
    public function getLatestBlogs()
    {
        return mysqli_fetch_all($this->db->query("SELECT * FROM `blogs` ORDER BY `id` DESC LIMIT 4"), MYSQLI_ASSOC);
    }

    public function createPost(string $title, string $body, array $img)
    {
        $img_name = rand(0, 99999) . $img['name'];
        move_uploaded_file($img['tmp_name'], "./Assets/img/{$img_name}");
        $img_path = "http://localhost/ecommerce/Assets/img/{$img_name}";
        $arr = [
            "title" => "'{$title}'",
            "img" => "'{$img_path}'",
            "body" => "'{$body}'",
        ];
        $this->write("blogs", ["title", "body", "img"], [$arr['title'], $arr['body'], $arr['img']]);
        header("location:./blog.php");
    }

    public function all()
    {
        return $this->read('blogs');
    }

    public function delete($id)
    {
        return $this->db->query("DELETE FROM `blogs` WHERE `id` = $id");
    }

    public function singlePost(int $id)
    {
        return $this->getById($id, "blogs");
    }
}

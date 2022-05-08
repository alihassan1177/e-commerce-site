<?php

class Blog extends Model
{
    public function getLatestBlogs()
    {
        return mysqli_fetch_all($this->db->query("SELECT * FROM `blogs` ORDER BY `id` DESC LIMIT 4"), MYSQLI_ASSOC);
    }
}

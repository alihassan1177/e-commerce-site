<?php

class Model
{

    protected $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    protected function read(string $table)
    {
        return mysqli_fetch_all($this->db->query("SELECT * FROM `{$table}`"), MYSQLI_ASSOC);
    }

    protected function write(string $table, array $column, array $value)
    {
        $col = implode(',', $column);
        $val = implode(',', $value);

        return $this->db->query("INSERT INTO `{$table}`({$col}) VALUES ({$val});");
        // echo ("INSERT INTO `{$table}`({$col}) VALUES ({$val});");
    }

    protected function getById(int $id, string $table = "users")
    {
        return mysqli_fetch_all($this->db->query("SELECT * FROM `{$table}` WHERE `id` = $id"), MYSQLI_ASSOC);
    }
}

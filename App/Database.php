<?php

class Database
{
    private $db_credentials = [
        'host' => 'localhost',
        'username' => 'root',
        'password' => '',
        'db_name' => 'ecommerce'
    ];

    private function connect()
    {
        $connection = mysqli_connect(
            $this->db_credentials['host'],
            $this->db_credentials['username'],
            $this->db_credentials['password'],
            $this->db_credentials['db_name']
        );

        if ($connection->connect_errno === 0) {
            return $connection;
        } else {
            return 'Failed';
        }
    }

    public function query(string $query)
    {
        return mysqli_query($this->connect(), $query);
    }
}

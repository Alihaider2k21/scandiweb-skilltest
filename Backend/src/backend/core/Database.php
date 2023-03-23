<?php


class Database
{
    private $connection;

    function __construct()
    {
        $this->connection = new mysqli("localhost", "id20457060_root", "u^24UnJ6cL1q\Z?R", "id20457060_scandiweb");
        $this->connection->set_charset('utf8mb4');
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function get()
    {
        return $this->connection;
    }
};

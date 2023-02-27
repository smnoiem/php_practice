<?php

class Database
{
    public $connection;

    public function __construct()
    {
        $dsn = "mysql:host=localhost;port=3306;dbname=php_practice;charset=utf8mb4";

        try {
            $this->connection = new PDO($dsn, 'root', 'bd7toRy5%');
        }
        catch(Exception $exception) {
            echo "db connection failed: {$exception}";
            die();
        }
    }

    public function query($query)
    {
        $prepared = $this->connection->prepare($query);

        $prepared->execute();

        return $prepared;
    }
}

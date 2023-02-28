<?php

namespace Core;

use PDO;
use Exception;

class Database
{
    public $connection;
    public $statement;

    public function __construct($config, $username = 'root', $password = '')
    {
        $connectionQueryString = http_build_query($config, '', ';');

        $dsn = "mysql:{$connectionQueryString}";

        try {
            $this->connection = new PDO($dsn, $username, $password, [

                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,

            ]);
        }
        catch(Exception $exception) {
            echo "db connection failed: {$exception}";
            die();
        }
    }

    public function query($query, $params = [])
    {
        $this->statement = $this->connection->prepare($query);

        $this->statement->execute($params);

        return $this;
    }

    public function find()
    {
        return $this->statement->fetch(PDO::FETCH_ASSOC);
    }

    public function findOrFail()
    {
        $result = $this->statement->fetch();

        if(!$result) abort(404);

        return $result;
    }

    public function get()
    {
        return $this->statement->fetchAll();
    }
}

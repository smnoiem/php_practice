<?php

class Database
{
    public $connection;

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
        $prepared = $this->connection->prepare($query);

        $prepared->execute($params);

        return $prepared;
    }
}

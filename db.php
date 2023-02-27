<?php

require "Database.php";

$config = require("config.php");

$db = new Database($config['database'], 'root', 'bd7toRy5%');

if(!isset($_GET['id'])) {
    echo "id isn't passed in the query parameters";
    return;
}

$id = $_GET['id'];

$query = "select * from posts where id = :id";

$post = $db->query($query, ['id' => $id])->fetch(PDO::FETCH_ASSOC);

echo "<li>{$post['title']}</li>";
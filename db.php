<?php

require "Database.php";

$config = require("config.php");

$db = new Database($config['database'], 'root', 'bd7toRy5%');

$id = $_GET['id'];

$query = "select * from posts where id = :id";

$post = $db->query($query, ['id' => $id])->fetch(PDO::FETCH_ASSOC);

echo "<li>{$post['title']}</li>";
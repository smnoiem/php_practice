<?php

require "Database.php";

$config = require("config.php");

$db = new Database($config['database'], 'root', 'bd7toRy5%');

$post = $db->query("select * from posts where id = 1")->fetch(PDO::FETCH_ASSOC);

echo "<li>{$post['title']}</li>";
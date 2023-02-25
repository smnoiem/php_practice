<?php

$dsn = "mysql:host=localhost;port=3306;dbname=php_practice;charset=utf8mb4";

try{
    $pdo = new PDO($dsn, 'root', 'bd7toRy5%');
}
catch(Exception $exception) {
    echo "db connection failed: {$exception}";
    die();
}

$prepared = $pdo->prepare("select * from posts");

$prepared->execute();

$posts = $prepared->fetchAll(PDO::FETCH_ASSOC);

foreach($posts as $post)
{
    echo "<li>{$post['title']}</li>";
}
<?php

$config = require('config.php');
$db = new Database($config['database'], 'root', 'bd7toRy5%');

$heading = "Create Note";

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db->query("INSERT INTO notes(body, user_id) VALUES(:body, :user_id)", [
        'body' => $_POST['body'],
        'user_id' => 6,
    ]);
}

require 'views/notes-create.view.php';
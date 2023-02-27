<?php

$config = require("config.php");
$db = new Database($config['database'], 'root', 'bd7toRy5%');

$heading = "Note";
$currentUserId = 6;

$note = $db->query("select * from notes where id = :id", [
    'id' => $_GET['id'],
])->findOrFail();

authorize($note['user_id'] === $currentUserId);

require 'views/note.view.php';
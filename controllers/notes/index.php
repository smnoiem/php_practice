<?php

$config = require(base_path("config.php"));
$db = new Database($config['database'], 'root', 'bd7toRy5%');

$notes = $db->query("select * from notes where user_id = :id", ['id' => 6])->get();

view("notes/index.view.php", [
    'heading' => 'My Notes',
    'notes' => $notes,
]);
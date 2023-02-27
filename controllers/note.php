<?php

$config = require("config.php");
$db = new Database($config['database'], 'root', 'bd7toRy5%');

$heading = "Note";
$currentUserId = 6;

$note = $db->query("select * from notes where id = :id", [
    'id' => $_GET['id'],
])->fetch();

if(!$note) abort(404);

if($note['user_id'] !== $currentUserId) abort(Response::FORBIDDEN);

require 'views/note.view.php';
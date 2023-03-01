<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$notes = $db->query("select * from notes where user_id = :id", ['id' => 6])->get();

view("notes/index.view.php", [
    'heading' => 'My Notes',
    'notes' => $notes,
]);

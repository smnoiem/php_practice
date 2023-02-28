<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$errors = [];

if(!Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'A body should be more than 1 and less than 1000 characters';
}

$currentUserId = 6;

$note = $db->query("select * from notes where id = :id", [
    'id' => $_POST['id'],
])->findOrFail();

authorize($note['user_id'] === $currentUserId);

if(!empty($errors)) {
    return view("notes/edit.view.php", [
        'heading' => 'Edit Note',
        'note' => $note,
        'errors' => $errors,
    ]);
}

$db->query("UPDATE notes SET body = :body WHERE id = :id", [
    'id' => $note['id'],
    'body' => $_POST['body'],
]);

header('location: /notes');

exit();

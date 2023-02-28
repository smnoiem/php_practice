<?php

use Core\Database;
use Core\Validator;

$config = require(base_path('config.php'));
$db = new Database($config['database'], 'root', 'bd7toRy5%');

$errors = [];

if(!Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = 'A body should be more than 1 and less than 1000 characters';
}

if(!empty($errors)) {
    view("notes/create.view.php", [
        'heading' => 'Create Note',
        'errors' => $errors,
    ]);
}

$db->query("INSERT INTO notes(body, user_id) VALUES(:body, :user_id)", [
    'body' => $_POST['body'],
    'user_id' => 6,
]);

header('location: /notes');

exit();

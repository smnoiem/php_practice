<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$errors = [];

if(!Validator::email($_POST['email'])) {
    $errors['email'] = 'Enter a valid email address';
}

if(!Validator::string($_POST['password'], 6, 255)) {
    $errors['password'] = 'A password should be at least 6 characters and 255 characters at most';
}

if(!empty($errors)) {
    return view("registration/create.view.php", [
        'errors' => $errors,
    ]);
}

$user = $db->query("SELECT * from users where email = :email", [
    'email' => $_POST['email'],
])->find();

if($user){
    header('location: /');
    exit();
}

$db->query("INSERT INTO users(email, password) VALUES(:email, :password)", [
    'email' => $_POST['email'],
    'password' => $_POST['password'],
]);

$_SESSION['user'] = [
    'email' => $_POST['email'],
];

header('location: /');

exit();

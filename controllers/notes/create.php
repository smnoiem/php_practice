<?php

use Core\Database;
use Core\Validator;

$config = require(base_path('config.php'));
$db = new Database($config['database'], 'root', 'bd7toRy5%');

view("notes/create.view.php", [
    'heading' => 'Create Note',
]);

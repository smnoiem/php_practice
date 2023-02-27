<?php

$config = require("config.php");
$db = new Database($config['database'], 'root', 'bd7toRy5%');

$heading = "My Notes";

$notes = $db->query("select * from notes where user_id = :id", ['id' => 6])->fetchAll();

require 'views/notes.view.php';
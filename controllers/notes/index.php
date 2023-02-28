<?php

$config = require("config.php");
$db = new Database($config['database'], 'root', 'bd7toRy5%');

$heading = "My Notes";

$notes = $db->query("select * from notes where user_id = :id", ['id' => 6])->get();

require 'views/notes/index.view.php';
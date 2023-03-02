<?php

if(isset($_SESSION['name'])) dd($_SESSION['name']);

view("about.view.php", [
    'heading' => 'About Us',
]);
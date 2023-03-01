<?php

use Core\Response;

function dd($value) 
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function isUri($uri)
{
    return $_SERVER['REQUEST_URI'] === $uri;
}

function abort($code = 404)
{
    http_response_code($code);
    view("{$code}.view.php");
    die();
}

function authorize($condition, $status = Response::FORBIDDEN)
{
    if(!$condition) {
        abort($status);
    }
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);
    require base_path('views/' . $path);
}
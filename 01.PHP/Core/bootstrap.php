<?php

use database\Connection;
use database\queryBuilder;

App::bind('config', require './config.php');


App::bind('database', new queryBuilder(
    Connection::make(App::get('config')['database'])
));

function view($name, $data = [])
{
    extract($data);
    return require "View/{$name}.view.php";
}

function redirect($path)
{
    header("Location: /{$path}");
}

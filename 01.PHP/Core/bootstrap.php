<?php

use database\Connection;
use database\queryBuilder;

App::bind('config', require './config.php');


App::bind('database', new queryBuilder(
    Connection::make(App::get('config')['database'])
));

<?php

use database\Connection;
use database\queryBuilder;
$app = [];

$app['config'] = require './config.php';


$app['database'] = new queryBuilder(Connection::make($app['config']['database']));

<?php

use database\Connection;
use database\queryBuilder;
$app = [];

$app['config'] = require './config.php';

require 'Core/Router.php';
require 'Core/Request.php';
require 'database/connection.php';
require 'database/queryBuilder.php';

$app['database'] = new queryBuilder(Connection::make($app['config']['database']));

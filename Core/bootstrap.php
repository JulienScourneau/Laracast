<?php

use database\Connection;
use database\queryBuilder;

$config = require 'config.php';
require 'database/connection.php';
require 'database/queryBuilder.php';

return new queryBuilder(Connection::make($config['database']));

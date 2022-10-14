<?php
require 'Task.php';
$query = require 'Core/bootstrap.php';

$uri = trim($_SERVER['REQUEST_URI'], '/');

require Router::load('routes.php')->direct(Request::uri(), Request::method());

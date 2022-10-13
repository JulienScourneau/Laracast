<?php
require 'Task.php';

$query = require 'bootstrap.php';
$tasks = $query->selectAll("task", "Task");

require 'index.view.php';
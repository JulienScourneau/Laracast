<?php

$tasks = $app['database']->selectAll("task", "Task");

require 'View/index.view.php';
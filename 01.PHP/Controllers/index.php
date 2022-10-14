<?php

$names = $app['database']->selectAll("users");

require 'View/index.view.php';
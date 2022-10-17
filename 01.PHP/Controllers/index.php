<?php

$names = App::get('database')->selectAll("users");

require 'View/index.view.php';
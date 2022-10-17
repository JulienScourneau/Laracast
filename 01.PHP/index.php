<?php


require 'vendor/autoload.php';
require 'Core/bootstrap.php';


Router::load('routes.php')->direct(Request::uri(), Request::method());

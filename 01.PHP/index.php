<?php


require 'vendor/autoload.php';
require 'Core/bootstrap.php';


require Router::load('routes.php')->direct(Request::uri(), Request::method());

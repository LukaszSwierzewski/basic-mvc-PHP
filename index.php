<?php

require 'vendor/autoload.php';

$query = require 'core/boostrap.php';

$router = new Router;


Router::load('routes.php')->direct(Request::request_uri(), Request::method());

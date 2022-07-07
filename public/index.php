<?php

use Router\Routes;
use Core\Superglobals;

session_start();

require_once '../vendor/autoload.php';

$route = new Routes;
$route->routeur();

<?php

require "app/autoloader.php";
\App\autoloader::register();

use App\app;
use App\constante;
use App\database;

$app = new app();
$constante = new constante();
$database = new database();





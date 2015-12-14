<?php

require "app/autoloader.php";
\App\autoloader::register();

use App\app;
use App\constante;
use App\database;
use App\product\categorie;

$app = new app();
$constante = new constante();
$database = new database();
$categorie = new categorie();


<?php
require "app/autoloader.php";
use App\Autoloader;
Autoloader::register();

if(isset($_GET['view']))
{
    $view = $_GET['view'];
}else{
    $view = 'dashboard';
}

ob_start();
if($view === 'dashboard'){require 'view/dashboard.php';}

$content = ob_get_clean();
require 'view/template/default.php';
<?php
ini_set("display_errors", 1);
require_once('autoload.php');

use app\router;

define('_DS_', DIRECTORY_SEPARATOR);
define('_VIEWPATH_', __DIR__._DS_.'app'._DS_.'view'._DS_);
define('_CTRLPATH_', __DIR__._DS_.'app'._DS_.'control'._DS_);

$router = new Router();
$router->routeRequest();

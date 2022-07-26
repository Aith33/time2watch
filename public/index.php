<?php

use Router\Router;

require "../vendor/autoload.php";

define("VIEWS", dirname(__DIR__) . DIRECTORY_SEPARATOR . "views" . DIRECTORY_SEPARATOR);
define("SCRIPTS", dirname($_SERVER["SCRIPT_NAME"]) . DIRECTORY_SEPARATOR);

$router = new Router($_GET["url"]);

$router->get("/", "app\Controllers\BlogController@index");
$router->get("/posts/:id", "BlogController@show");

$router->run();
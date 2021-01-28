<?php
require "vendor/autoload.php";
use ToDo\Request;
use ToDo\Router;
require Router::load('routes.php')
    ->direct(Request::uri());

//echo $_SERVER['REQUEST_URI'];
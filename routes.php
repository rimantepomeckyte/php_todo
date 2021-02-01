<?php

$router -> define([
    'to_do_list'=>'controllers/home.php',
    'to_do_list/new-task'=>'controllers/new-task.php',
    'to_do_list/edit-task'=>'controllers/edit-task.php',
    'to_do_list/404'=>'controllers/404.php',
    "to_do_list/delete-task"=>'controllers/delete-task.php',
    "to_do_list/complete-task"=>'controllers/complete-task.php'
]);
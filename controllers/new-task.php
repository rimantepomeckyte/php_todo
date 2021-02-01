<?php
session_start();
use ToDo\DB;
use ToDo\Task;
require  'inc/functions.php';
require 'inc/tododata.php';

if(isset($_POST['send']) ){
validate($_POST);}
if(isset($_POST['send']) & empty($validation)){

    $connections = DB::connect();
    $task = new Task($connections);
    $task->createTask($_POST);
    $_SESSION['message']="The Task has been added!";
     $_SESSION['msg_type']="success";
}else{
    require  'view/pages/new-task.view.php';
}

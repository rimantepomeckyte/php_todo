<?php
session_start();
use ToDo\DB;
use ToDo\Task;
use ToDo\Validation;
require 'inc/tododata.php';

if(isset($_POST['send']) ){
    $validate=Validation::validate($_POST);

   // var_dump($validate);
}
if(isset($_POST['send']) & empty($validate)){

    $connections = DB::connect();
    $task = new Task($connections);
    $task->createTask($_POST);
    $_SESSION['message']="The Task has been added!";
    $_SESSION['msg_type']="success";
}else{
    require  'view/pages/new-task.view.php';
}

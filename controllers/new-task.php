<?php

use ToDo\DB;
use ToDo\Task;
require 'data/tododata.php';

if(isset($_POST['send'])){
    $connections = DB::connect();
    $task = new Task($connections);
    $task->createTask($_POST);
}else{
    require  'view/pages/new-task.view.php';
}

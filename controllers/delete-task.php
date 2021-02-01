<?php
session_start();
use ToDo\Request;
use ToDo\DB;
use ToDo\Task;
 //echo "test";

$connect = DB::connect();
$tasks = new Task($connect);
$id= intval(basename(Request::uri()));
//var_dump($id);
$tasks -> deleteTask($id);
$_SESSION['message']="The Task has been deleted!";
$_SESSION['msg_type']='danger';

<?php

use ToDo\DB;
use ToDo\Task;

$connect = DB::connect();
$tasks = new Task($connect);

require 'view/pages/home.view.php';


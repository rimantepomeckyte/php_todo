<?php
$validation = [];

function validate($data){
    global $validation;
    if (empty($_POST['subject']) || empty($_POST['priority']) || empty($_POST['duedate'])) {
        $validation[] = "Please fill all the task fields";
    }
    return $validation;
}


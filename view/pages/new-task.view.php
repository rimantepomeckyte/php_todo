<?php
/* html procented kodas:
            <div class="form-group">
                <label for="percentCompleted" class="mb-0">Percent completed</label>
                <select class="form-control" id="percentCompleted" name="percentCompleted">
                    <option value="" disabled selected>Select your option</option>
                    <?php foreach ($percentCompleted as $value): ?>
                        <option value="<?= $value; ?>"><?= $value; ?> %</option>
                    <?php endforeach; ?>
                </select>
            </div>

ir status:
            <div class="form-group">
                <label for="status" class="mb-0">Due date</label>
                <select class="form-control" id="status" name="status">
                    <option value="" disabled selected>Select your to do status</option>
                    <?php foreach ($status as $value): ?>
                        <option value="<?=$value; ?>"><?= ucfirst($value); ?></option>
                    <?php endforeach; ?>
                </select>
            </div>*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="view/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/8305e96607.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./view/style.css" type="text/css">
    <title>To Do List</title>
</head>
<body>
<div class="container-fluid pt-2">
    <h1 class="text-capitalize text-center mt-4">To do list </h1>
    <h4 class="text-center text-dark">Make your life easier with to do list!</h4>
    <div class="row">
        <form class="col-11 col-lg-7 mx-auto" id="form" method="post">
            <div class="form-group">
                <label for="subject" class="mb-0">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject">
            </div>
            <div class="form-group">
                <label for="priority" class="mb-0">Priority</label>
                <select class="form-control" id="priority" name="priority">
                    <option value="" disabled selected>Select your to do priority</option>
                    <?php foreach ($priority as $value): ?>
                        <option value="<?=$value; ?>"><?= ucfirst($value); ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="dueDate" class="mb-0">Due date</label>
                <input type="date" class="form-control" id="duedate" name="duedate">
            </div>
            <div class="form-group d-flex justify-content-center">
                <input id="send" name="send" class="btn btn-success font-weight-bold text-white" type="submit" value="Add task">
            </div>
        </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>
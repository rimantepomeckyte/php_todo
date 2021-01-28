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
    <div class="form-group row">
        <input id="add" name="add" class="btn btn-success font-weight-bold col-md-2 col-4 offset-md-1" type="submit" value="Add new task">
    </div>
    <div class="row">
        <table class="table table-sm col-md-10 mb-5 mx-auto text-center mt-3">
            <thead>
            <tr class="table-success">
                <th><i class="fas fa-arrow-circle-down "></i></th>
                <th>Subject</th>
                <th>Priority</th>
                <th>Due date</th>
                <th>Status</th>
                <th>Percent completed</th>
                <th>Modified on</th>
            </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
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
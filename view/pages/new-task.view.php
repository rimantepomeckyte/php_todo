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
<?php require 'view/_partials/htmlhead.php';
?>
<?php if (!empty($validate)): ?>
    <?php foreach ($validate as $error): ?>
        <div class="alert alert-danger"><?= $error; ?></div>
    <?php endforeach; ?>
<?php endif; ?>
<?php require 'view/_partials/header.php'; ?>
<div class="container-fluid pt-2">
    <p class="col-md-2 col-4 offset-md-1"><a href="/to_do_list" class="btn btn-success font-weight-bold">Back to tasks
            list</a></p>

    <div class="row">
        <form class="col-11 col-lg-5 col-md-7 mx-auto" id="form" method="post">
            <div class="form-group">
                <label for="subject" class="mb-0">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject">
            </div>
            <div class="form-group">
                <label for="priority" class="mb-0">Priority</label>
                <select class="form-control" id="priority" name="priority">
                    <option value="" disabled selected>Select your to do priority</option>
                    <?php foreach ($priority as $value): ?>
                        <option value="<?= $value; ?>"><?= ucfirst($value); ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="dueDate" class="mb-0">Due date</label>
                <input type="date" class="form-control" id="duedate" name="duedate">
            </div>
            <div class="form-group d-flex justify-content-center">
                <input id="send" name="send" class="btn btn-success font-weight-bold text-white" type="submit"
                       value="Add task">
            </div>
        </form>
    </div>
</div>
<?php require 'view/_partials/htmlend.php'; ?>

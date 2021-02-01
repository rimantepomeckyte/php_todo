<?php session_start();
require 'view/_partials/htmlhead.php'; ?>
<?php if (isset($_SESSION['message'])): ?>
    <div class="alert alert-<?= $_SESSION['msg_type'] ?>">
        <?php
        echo $_SESSION['message'];
        unset($_SESSION['message']);
        ?>
    </div>
<?php endif; ?>
<?php require 'view/_partials/header.php'; ?>
<div class="container-fluid pt-2">

    <div class="form-group row">
        <p class="col-md-2 col-4 offset-md-1"><a href="new-task" class="btn btn-success font-weight-bold">Add new
                task</a></p>
    </div>
    <div class="row">
        <table class="table table-sm col-md-10 mb-5 mx-auto text-center mt-3">
            <thead>
            <tr class="table-success">
                <th scope="col"><i class="fas fa-arrow-circle-down "></i></th>
                <th scope="col">Subject</th>
                <th scope="col">Priority</th>
                <th scope="col">Due date</th>
                <th scope="col">Status</th>
                <th scope="col">Created</th>
                <th scope="col"><i class="fas fa-arrow-circle-down "></i></th>
                <th scope="col"><i class="fas fa-arrow-circle-down "></i></th>
            </tr>
            </thead>
            <tbody>

            <?php foreach ($tasks->allTasks() as $task): ?>
                <tr>
                    <?php if ($task['status'] == "1"): ?>
                        <td class="align-middle"><i class="fas fa-thumbtack" style="opacity: 0.5"></i></td>
                        <td class="align-middle"
                            style="text-decoration: line-through;"><?= ucfirst($task['subject']); ?>
                        <?php if ($task['priority'] == "low"): ?>
                            <td class="d-flex justify-content-center pt-2"><p
                                        class="text-center border rounded-pill bg-success w-100 mb-0 text-secondary"
                                        style="opacity: 0.5"><?= ucfirst($task['priority']); ?></p>
                            </td>
                        <?php elseif ($task['priority'] == "normal"): ?>
                            <td class="d-flex justify-content-center pt-2"><p
                                        class="text-center border rounded-pill bg-warning w-100 mb-0 text-secondary"
                                        style="opacity: 0.5;"><?= ucfirst($task['priority']); ?></p>
                            </td>
                        <?php elseif ($task['priority'] == "high"): ?>
                            <td class="d-flex justify-content-center pt-2"><p
                                        class="text-center border rounded-pill bg-danger w-100 mb-0 text-secondary"
                                        style="opacity: 0.5;"><?= ucfirst($task['priority']); ?></p>
                            </td>
                        <?php endif; ?>
                        <td class="align-middle text-secondary"><?= $task['dueDate']; ?></td>
                        <td class="align-middle text-success font-weight-bold">Complete</td>
                        <td class="align-middle text-secondary"><?= $task['modified']; ?></td>
                    <?php else: ?>
                        <td class="align-middle"><i class="fas fa-thumbtack"></i></td>
                        <td class="align-middle font-weight-bold"><?= ucfirst($task['subject']); ?>
                        <?php if ($task['priority'] == "low"): ?>
                            <td class="d-flex justify-content-center pt-2"><p
                                        class="text-center border rounded-pill bg-success w-100 mb-0"><?= ucfirst($task['priority']); ?></p>
                            </td>
                        <?php elseif ($task['priority'] == "normal"): ?>
                            <td class="d-flex justify-content-center pt-2"><p
                                        class="text-center border rounded-pill bg-warning w-100 mb-0"><?= ucfirst($task['priority']); ?></p>
                            </td>
                        <?php elseif ($task['priority'] == "high"): ?>
                            <td class="d-flex justify-content-center pt-2"><p
                                        class="text-center border rounded-pill bg-danger w-100 mb-0"><?= ucfirst($task['priority']); ?></p>
                            </td>
                        <?php endif; ?>
                        <td class="align-middle font-weight-bold"><?= $task['dueDate']; ?></td>
                        <td class="align-middle font-weight-bold">In progress</td>
                        <td class="align-middle font-weight-bold"><?= $task['modified']; ?></td>
                    <?php endif; ?>
                    <td class="align-middle"><a href="complete-task/id/<?= $task['id']; ?>"
                                                class="btn btn-success">Done</a>
                    </td>
                    <td class="align-middle"><a href="delete-task/id/<?= $task['id']; ?>"
                                                class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach;; ?>
            </tbody>
        </table>
    </div>
</div>
<?php require 'view/_partials/htmlend.php'; ?>

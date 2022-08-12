<link rel="stylesheet" href="assets/bootstrap.min.css">
<script src="assets/bootstrap.min.js"></script>
<?php
require_once("db_connection.php");

$teacher = mysqli_query($con, "SELECT * from teacher");
$row_teacher = mysqli_fetch_assoc($teacher);

?>

<div class="container my-5 p-5 w-75">
    <div class="card">
        <div class="card-header bg-primary">
            <div class=" h4 card-title">Teachers' List</div>
            <a href="teacher_add.php" class="btn btn-success">Add</a>
        </div>
        <div class="card-body">
            <?php if ($row_teacher > 0) { ?>
                <table class="table table-hover table-responsive-md">
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Department</th>
                        <th>Actions</th>

                    </tr>
                    <?php $x = 1;
                    do { ?>
                        <tr>
                            <td><?= $x++; ?></td>
                            <td><?= $row_teacher["first_name"]; ?></td>
                            <td><?= $row_teacher["last_name"]; ?></td>
                            <td><?= $row_teacher["email"]; ?></td>
                            <td><?= $row_teacher["department"]; ?></td>
                            <td><a href="teacher_edit.php?id=<?= $row_teacher["id"]; ?>" class="btn btn-info">Edit</a>
                                <a href="teacher_delete.php?id=<?= $row_teacher["id"]; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php } while ($row_teacher = mysqli_fetch_assoc($teacher)) ?>
                </table>
            <?php } else { ?>
                <div class="alert alert-warning lead">No available employee!</div>
            <?php } ?>
        </div>
    </div>
</div>
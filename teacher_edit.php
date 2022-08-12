<?php
require_once("db_connection.php");
if (!isset($_GET['id'])) {
    header('location: index.php');
}
$teacher = mysqli_query($con, "SELECT * FROM teacher WHERE id = " . $_GET["id"]);
$row_teacher = mysqli_fetch_assoc($teacher);

if (isset($_POST["first_name"])) {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $department = $_POST["department"];

    $result = mysqli_query($con, "UPDATE teacher SET first_name = '$first_name', 
            last_name = '$last_name', email = '$email', 
            department = '$department' WHERE id = " . $_GET['id']);
    if ($result) {
        header("location: index.php?edit=done");
    } else {
        header("location: teacher_edit.php?error=not edited&id=" . $_GET["id"]);
    }
}
?>
<link rel="stylesheet" href="assets/bootstrap.min.css">
<script src="assets/bootstrap.min.js"></script>
<div class="container my-5 p-5 w-50">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <div class="h4 card-title">Edit Teacher</div>

        </div>
        <div class="card-body p-3">
            <form method="post">
                <div class="input-group pb-2">
                    <label class="input-group-text text-body">First name:</label>
                    <input type="text" name="first_name" value="<?= $row_teacher['first_name']; ?>" class="form-control">
                </div>
                <div class="input-group pb-2">
                    <label class="input-group-text text-body">Last name:</label>
                    <input type="text" name="last_name" value="<?= $row_teacher['last_name']; ?>" class="form-control">
                </div>
                <div class="input-group pb-2">
                    <label class="input-group-text text-body">Email:</label>
                    <input type="email" name="email" value="<?= $row_teacher['email']; ?>" class="form-control">
                </div>
                <div class="input-group pb-2">
                    <label class="input-group-text text-body">Department:</label>
                    <input type="text" name="department" value="<?= $row_teacher['department']; ?>" class="form-control">
                </div>
                <button class="btn btn-primary w-25">Save</button>
            </form>
        </div>
    </div>
</div>
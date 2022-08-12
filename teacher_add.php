<?php
require_once("db_connection.php");

if (isset($_POST["first_name"])) {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $department = $_POST["department"];
    $result = mysqli_query($con, "INSERT INTO teacher VALUES (NULL, '$first_name', '$last_name','$email', '$department' )");
    if ($result) {
        header("location: index.php?add=done");
    } else if (!$result) {
        echo "<h2>Error: " . mysqli_error($con) . "</h2>";
    } else {
        header("location: teacher_add.php?error=wasn't added");
    }
}
?>
<link rel="stylesheet" href="assets/bootstrap.min.css">
<script src="assets/bootstrap.min.js"></script>
<div class="container my-5 p-5 w-50">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <div class="h4 card-title ">Add Teacher</div>
        </div>
        <div class="card-body p-3">
            <form method="post">
                <div class="input-group pb-2">
                    <label class="input-group-text text-body">First name:</label>
                    <input type="text" name="first_name" class="form-control">
                </div>
                <div class="input-group pb-2">
                    <label class="input-group-text text-body">Last name:</label>
                    <input type="text" name="last_name" class="form-control">
                </div>
                <div class="input-group pb-2">
                    <label class="input-group-text text-body">Email:</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="input-group pb-2">
                    <label class="input-group-text text-body">Department:</label>
                    <input type="text" name="department" class="form-control">
                </div>
                <button class="btn btn-primary w-25">Add</button>
            </form>
        </div>
    </div>
</div>
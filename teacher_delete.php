<link rel="stylesheet" href="assets/bootstrap.min.css">
<script src="assets/bootstrap.min.js"></script>
<?php
require_once("db_connection.php");
$result = mysqli_query($con, "DELETE FROM teacher WHERE id = " . $_GET['id']);
if ($result) {
    header("location: index.php?delete=done");
} else {
    header("location: index.php?error=nothing removed");
}
?>

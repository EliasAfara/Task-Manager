<?php
include "../connect_database.php";

$sql = "SELECT * FROM Announcements ORDER BY id DESC";
$results = mysqli_query($conn, $sql);

$get = "SELECT * FROM Announcements ORDER BY id DESC";
$run_user = mysqli_query($conn,$get);

$row = mysqli_fetch_assoc($run_user);

$body = $row['body'];
$title = $row['title'];
$file = $row['file'];
$id = $row['id'];

?>
<?php

include "../connect_database.php";

if(isset($_POST['submit'])){
  // Get text & body information
  $title = mysqli_real_escape_string($conn, $_POST['title']);
  $content = mysqli_real_escape_string($conn, $_POST['content']);
  $currentUser = $_SESSION['adminUserName'];
  $sql = "INSERT INTO discussions(title, content, createdBy, datetime) VALUES ('$title','$content','$currentUser',NOW())";
  if(mysqli_query($conn, $sql)){
    header("location:admin_home.php");
  }else{
    array_push($errors,"Connection Error");
  }
}

?>

<?php
include "../connect_database.php";
  if(isset($_GET['post_id'])){
		$id = $_GET['post_id'];
	}
	if(empty($id)){
		header("Location: admin_home.php");
	}
	$run = mysqli_query($conn,"DELETE FROM discussions WHERE post_Id = '$id'")
	or die("Connection Failed");/*!<"$run" is the result returned by "mysqli_query(…)" is the function that executes the SQL queries (Selected query type is Delete).*/

  $run2 = mysqli_query($conn,"DELETE FROM discussionComments WHERE post_Id = '$id'")
	or die("Connection Failed");/*!<"$run2" is the result returned by "mysqli_query(…)" is the function that executes the SQL queries (Selected query type is Delete).*/


	header("Location: admin_home.php");
?>

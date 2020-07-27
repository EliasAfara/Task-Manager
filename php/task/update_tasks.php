<?php

include "../connect_database.php";

if(isset($_POST['updatedata'])){

	$id = $_POST['update_id'];

	$title = $_POST['title'];
	$body = $_POST['body'];

	$query = "UPDATE tasks SET taskName='$title', description='$body', addedAt=NOW() WHERE taskID='$id'";
	$query_run = mysqli_query($conn, $query);

	if($query_run){
		array_push($errors,"Data Updated");
		header("location:display_tasks.php");
	}
	else{
		array_push($errors,"Data Not Updated");
	}

}

?>

<?php

include "../connect_database.php";
include_once "../errors.php";

if(isset($_POST['updateIsDone'])){

	$id = $_SESSION['ASSIGNED_ID'];
	$done = true;

	$query = "UPDATE taskAssigned SET isDone='$done' WHERE assignedID='$id'";
	$query_run = mysqli_query($conn, $query);

	if($query_run){
		array_push($errors,"Task Updated");
		header("location:display_tasks.php");
		unset($_SESSION['ASSIGNED_ID']);
	}
	else{
		array_push($errors,"Data Not Updated");
	}
}
?>

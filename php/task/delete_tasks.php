<?php

include "../connect_database.php";

if(isset($_POST['deletedata'])){
	$id = $_POST['delete_id'];

	// sql to delete a record
	$sqlDel = "DELETE FROM tasks WHERE taskID = '$id'";
	$sqlDel1 = "DELETE FROM taskAssigned WHERE taskID = '$id'";

	if (mysqli_query($conn, $sqlDel) && mysqli_query($conn, $sqlDel1)) {
		$_SESSION['success'] = "Task was successfully deleted";
		header('location:display_tasks.php');
	} else {
		$_SESSION['success'] = "Error deleting record: " . mysqli_error($conn);
	}
}

?>

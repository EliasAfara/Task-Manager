<?php

include "../connect_database.php";
include_once "../errors.php";

if(isset($_POST['updateIsDone'])){

	$id = $_POST['updateStatusDone'];
	$done = true;

	$query = "UPDATE tasks SET isDone='$done' WHERE taskID='$id'";
	$query_run = mysqli_query($conn, $query);

	if($query_run){
		array_push($errors,"Task Updated");
		header("location:display_tasks.php");
	}
	else{
		array_push($errors,"Data Not Updated");
	}

}

?>
<?php

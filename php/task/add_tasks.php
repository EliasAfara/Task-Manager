<?php
include_once "../connect_database.php";

//Upload Tasks
if (isset($_POST['submitTask'])) {
	if (isset($_POST['taskName']) &&
		isset($_POST['taskDeadline']) &&
		isset($_POST['assignedTo']) &&
		isset($_POST['description'])) {

		$taskName  = mysqli_real_escape_string($conn, $_POST['taskName']);
		$taskDeadline =mysqli_real_escape_string($conn, $_POST['taskDeadline']);
		$assignedTo = mysqli_real_escape_string($conn, $_POST['assignedTo']);
		$description = mysqli_real_escape_string($conn, $_POST['description']);
		$taskFile = $_POST['task_Uploaded'];
		$current_user = $_SESSION['adminUserName'];
		if (empty($taskName) || empty($taskDeadline) || empty($assignedTo) || empty($description)){
			array_push($errors,"Please fill all the fields");
			header("Location: admin_index.php");
		}else {
			$filename = $_FILES['task_Uploaded']['name'];
			// destination of the file on the server
			$destination = '../files/' . "file_$filename";

			// get the file extension
			$extension = pathinfo($filename, PATHINFO_EXTENSION);

			// the physical file on a temporary uploads directory on the server
			$file = $_FILES['task_Uploaded']['tmp_name'];
			$size = $_FILES['task_Uploaded']['size'];

			if (!in_array($extension, ['pdf','zip', 'docx', 'doc'])) {
				array_push($errors, "You file extension must be .pdf, .docx. doc, .zip");
			} else if ($_FILES['task_Uploaded']['size'] > 80000000) { // file shouldn't be larger than 80 Megabyte
				array_push($errors, "Book is too large to Upload!");
			} else {
				// move the uploaded (temporary) file to the specified destination
				if (move_uploaded_file($file, $destination)) {
					$deadline = date('Y-m-d',strtotime($taskDeadline));

					$sql = "INSERT INTO Tasks(taskName,description,taskAssigned,taskAddedBy,taskDeadline,addedAt,isDone,fileName,taskFile)
 					VALUES('$taskName','$description','$assignedTo','$current_user','$deadline',NOW(),false,'$filename','$file')";

					if (mysqli_query($conn, $sql)) {

						$sql2 = "SELECT taskID FROM Tasks WHERE taskName = '$taskName'";
						$result  = mysqli_query($conn,$sql2);
						$row  = $result->fetch_assoc();
						$id = $row['taskID'];

						header("Location: display_tasks.php");
						$sql1 = "INSERT INTO taskAssigned(isDone,taskID,description,taskDeadline,addedBy,assignedTo,fileName,newTaskFile,datetime)
 					VALUES(false,'$id','$description','$taskDeadline','$current_user','$assignedTo','$filename','$file',NOW())";
						mysqli_query($conn, $sql1);
						array_push($errors, "File is Uploaded Successfully");
					} else {
						array_push($errors, "An Error Occurred While Uploading the Book.");
					}
				} else {
					array_push($errors, "Failed to upload file.");
				}
			}
		}
	}
}else{
	echo "Hello world?!";
}

?>
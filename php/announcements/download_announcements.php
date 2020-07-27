<?php
include_once "../connect_database.php";
// Downloads files
if (isset($_GET['id'])) {
	$id = $_GET['id'];

	$res = mysqli_query($conn,"SELECT fileName FROM announcements WHERE id='$id'");
	$filename = mysqli_fetch_assoc($res);
	$getFN = $filename['fileName'];

	$file = '../files/'."file_$getFN";
	$fileinfo = pathinfo($file);
	$sendname = $fileinfo['filename'] . '.' . strtoupper($fileinfo['extension']);
	header('Content-Type: application/pdf');
	header("Content-Disposition: attachment; filename=\"$file\"");
	header('Content-Length: ' . filesize($file));
	readfile($file);
} else {
	header("HTTP/1.0 404 Not Found");
}
?>

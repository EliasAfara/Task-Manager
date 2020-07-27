<?php

session_start();

// MYSQL Configuration
$servername = "localhost";
$server_user = "root";
$server_password = "";
$dbname = "taskmanagermc";

//for saving errors in order to be displayed
$errors = array();

// Create connection
$conn = mysqli_connect($servername, $server_user, $server_password, $dbname);

// Check connection
if (!$conn) {
	array_push($errors, "Connection failed");
}else{}

?>
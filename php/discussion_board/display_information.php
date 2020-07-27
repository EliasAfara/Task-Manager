<?php

include "../connect_database.php";

$id = $_GET['post_id'];/*!<Getting the ID value of the chosen post using $_GET which is a PHP super global variable which is used to collect form data after submitting an HTML form with method="get".*/
$sql = mysqli_query($conn,"SELECT * from discussions where post_Id='$id' ")
or die("Connection Failed");/*!<"$sql" is the result returned by "mysqli_query(…)" is the function that executes the SQL queries (Selected query type is Select ordered by the ID of the post).*/
while($row=mysqli_fetch_assoc($sql)){
    extract($row);
    echo "<label>Topic Title: </label> ".$title."<br>";
    echo "<label>Date time posted: </label> ".date("m/d/Y g:i A", strtotime($datetime));
    echo "<p class='well'>".$content."</p>";
}

?>

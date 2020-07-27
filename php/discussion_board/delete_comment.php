<?php
include "../connect_database.php";
  if(isset($_GET['comment_Id'])){
		$id = $_GET['comment_Id'];
	}
	if(empty($id)){
		header("location:user_home.php");
	}
  $sql = mysqli_query($conn,"SELECT * from discussionComments where comment_Id='$id'")
  or die("Connection Failed");/*!<"$sql" is the result returned by "mysqli_query(…)" is the function that executes the SQL queries (Selected query type is Select ordered by the ID of the comment).*/
  $val = mysqli_fetch_assoc($sql);/*!<“$val” is the result returned by the mysqli_query function while“mysqli_fetch_array(…)” is the function for fetching row arrays.*/
  $postid = $val['post_Id'];/*!<Getting the ID value of the chosen post from the database.*/

	$run = mysqli_query($conn,"DELETE FROM discussionComments WHERE comment_Id = '$id'")
	or die("Connection Failed");/*!<"$run" is the result returned by "mysqli_query(…)" is the function that executes the SQL queries (Selected query type is Delete ordered by the ID of the comment).*/

	header("Location: content.php?post_id=$postid");

?>

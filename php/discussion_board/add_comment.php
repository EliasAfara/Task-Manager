<?php
include "../connect_database.php";
if(isset($_POST['add_comment'])){
	$comment = mysqli_real_escape_string($conn,$_POST['commenttxt']);
	$postid = $_POST['postid'];
	$current_user = $_SESSION['adminUserName'];
	$comment = mysqli_query($conn,"INSERT into discussionComments (comment,post_Id,commentedBy) values ('$comment','$postid','$current_user') ");
	header("Location: content.php?post_id=$postid");
}
?>

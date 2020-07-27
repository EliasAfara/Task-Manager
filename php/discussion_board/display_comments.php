<?php
include_once "../connect_database.php";

$postid= $_GET['post_id'];/*!<Getting the ID value of the chosen post using $_GET which is a PHP super global variable which is used to collect form data after submitting an HTML form with method="get".*/
$sql1 = mysqli_query($conn,"SELECT * from discussionComments where post_Id='$postid' ORDER BY comment_Id DESC")
or die("Connection Failed");/*!<"$sql1" is the result returned by "mysqli_query(…)" is the function that executes the SQL queries (Selected query type is Select ordered by the ID of the comment).*/
while($row1=mysqli_fetch_assoc($sql1)){
    extract($row1);
    echo "<label style='padding-top: 1rem;'>Comment by: </label>  ". $row1['commentedBy'];
    echo '<label class="pull-right">'.date("m/d/Y g:i A", strtotime($row1['datetime'])).'</label>';
    echo "<p class='well'>".$row1['comment']."</p>";
    if ($row1['commentedBy'] == $_SESSION['adminUserName']) {
        echo '<td><a href="edit_comment.php?comment_Id=' . $comment_Id . '">
                      <button class="btn btn-primary">Edit</button>
                    </a>
                    <a href="delete_comment.php?comment_Id=' . $comment_Id . '">
                      <button class="btn btn-danger">Delete</button>
                    </a>
                </td>';
    }
    else
        echo '';
    echo "<br>";/*!<While loop is a control flow statement that allows code to be executed repeatedly based on a given Boolean condition, which is "$row1" is equal to the value of the fetched rows that are selected from the database.*/
}


?>

<?php

include "../connect_database.php";

  $sel1 = mysqli_query($conn,"SELECT * from discussions ORDER BY post_Id DESC")
  or die("Connection Failed");/*!<"$sel1" is the result returned by "mysqli_query(…)" is the function that executes the SQL queries (Selected query type is Select ordered by the ID of the post).*/
  while($row1=mysqli_fetch_assoc($sel1)){
        extract($row1);
        echo '<tr style="height: 10vh; text-align: center; table-layout: fixed;">';
        echo '<td style="font-size: 2.5rem;">'.$title.'</td>';
      echo '<td style="font-size: 2.5rem;">'.date("m/d/Y g:i A", strtotime($row1['$datetime'])).'</td>';
      echo '<td style="font-size: 2.5rem;">'.$row1['createdBy'].'</td>';
        if ( $row1['createdBy'] == $_SESSION['adminUserName']) {
            echo '<td><a href="content.php?post_id=' . $post_Id . '"><button class="btn btn-success" style="font-size: 2rem;">View</button>
              <a href="edit_discussion.php?post_id=' . $post_Id . '"><button class="btn btn-primary" style="font-size: 2rem;">Edit</button></a>
              <a href="delete_discussion.php?post_id=' . $post_Id . '"><button class="btn btn-danger" style="font-size: 2rem;">Delete</button></a>
              </td>';
        } else{
            echo '<td><a href="content.php?post_id=' . $post_Id . '"><button class="btn btn-success" style="font-size: 2rem;">View</button>';
        }
        echo '</tr>';
  }
echo '</table>
</div>
</div>';/*!<While loop is a control flow statement that allows code to be executed repeatedly based on a given Boolean condition, which is "$row1" is equal to the value of the fetched rows that are selected from the database.*/
?>

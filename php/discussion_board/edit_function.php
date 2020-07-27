<?php
      include "../connect_database.php";
      if(isset($_GET['post_id'])){
        $post_Id = $_GET['post_id'];
      }
      if(empty($post_Id)){
        header("location:admin_home.php");
      }
      $sql = "SELECT * FROM discussions WHERE post_Id='$post_Id'";/*!<"$sql" variable used to contain the selected information from the database.*/
      $run = mysqli_query($conn,$sql)
      or die("Connect Failed");/*!<"$run" is the result returned by "mysqli_query(…)" is the function that executes the SQL queries (Selected query type is Select).*/

      while($row=mysqli_fetch_array($run)){
            $post_Id = $row['post_Id'];
            $title = $row['title'];
            $content = $row['content'];
            $datetime =$row['datetime'];
      }
      if(isset($_POST['edit'])){
        $title = $_POST['title'];
        $content = $_POST['content'];
        $sql = "UPDATE discussions SET title='$title', content='$content', datetime=NOW() WHERE post_Id='$post_Id'";

        $query_run = mysqli_query($conn, $sql);
        if($query_run){
           header("Location: ../discussion_board/admin_home.php");
        }
        else{
            echo '<script> alert("Data Not Updated"); </script>';
        }
      }
  ?>

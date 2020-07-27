<?php

include "../connect_database.php";

$errors = array();

if(isset($_POST['updatedata'])){

    $id = $_POST['update_id'];

    $title = $_POST['title'];
    $body = $_POST['body'];

    $query = "UPDATE Announcements SET title='$title', body='$body', upload_date=NOW() WHERE id='$id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run){
        echo '<script> alert("Data Updated"); </script>';
        header("location:display_annoucements.php");
    }
    else{
        echo '<script> alert("Data Not Updated"); </script>';
    }

}

?>

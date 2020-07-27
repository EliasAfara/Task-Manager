<?php

include "../connect_database.php";

if(isset($_POST['deletedata'])){
    $id = $_POST['delete_id'];

    // sql to delete a record
    $sqlDel = "DELETE FROM Announcements WHERE id = '$id'";

    if (mysqli_query($conn, $sqlDel)) {
        $_SESSION['success'] = "Announcement was successfully deleted";
        header('location: display_annoucements.php');
    } else {
        $_SESSION['success'] = "Error deleting record: " . mysqli_error($conn);
    }
}
?>

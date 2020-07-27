<?php

include "../connect_database.php";

$id = $_GET['taskID'];/*!<Getting the ID value of the chosen post using $_GET which is a PHP super global variable which is used to collect form data after submitting an HTML form with method="get".*/
$results = mysqli_query($conn,"SELECT * from tasks where taskID='$id' ")
or die("Connection Failed");/*!<"$sql" is the result returned by "mysqli_query(…)" is the function that executes the SQL queries (Selected query type is Select ordered by the ID of the post).*/
if(mysqli_num_rows($results) > 0){
	// output data of each row
	while($row = $results->fetch_assoc()) {
		$link = '';
		?>
		<br>
		<br style="height: 15vh;">
        <div class="total_div"><td style="text-align: center;"> <span class="title_of_task">:إسم المهمة</span><br> <?php echo $row['taskName']; ?></td></br><br>
            <td style="display: none;"> <span class="title_of_task">:المضمون</span><br> <?php echo $row['description']  ?></td></br><br>
            <td style="text-align: center; margin-top: 20rem;"> <span class="title_of_task">:أُضيفت بواسطة </span><br> <?php echo $row['taskAddedBy'] ?></td></br><br>
            <td style="text-align: center;"> <span class="title_of_task">:موجهة إلى</span><br> <?php echo $row['taskAssigned'] ?></td></br><br>
            <td style="text-align: center;"> <span class="title_of_task">:أُضيفت بتاريخ</span><br> <?php echo date('(d-m-Y)  h:i:s',strtotime($row['addedAt'])) ?></td></br><br>
            <td style="text-align: center;"> <span class="title_of_task">:موعد إنتهاء المهمة</span><br> <?php echo date('d-m-Y',strtotime($row['taskDeadline'])) ?></td></br><br>
        <td style="text-align: center; font-size: 2rem;"><a href= "download_tasks.php?id=<?php echo $row['taskID'];?>" class="btn btn-info">Download File</a></td><br>
        </div>
	<?php }
	echo "</table>";
} else { echo ""; }

?>

<style>
    .total_div{
        text-align: center;
        font-size: 20px;
    }
    .title_of_task{
        font-weight: bold;
        margin: 20px;
        font-size: 20px;
        text-align: center;
    }
</style>

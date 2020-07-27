<style href="../css/tasks/display_new_task.php"></style>

<!--Done Modal -->
<div class="modal fade" id="donemodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 style="text-align: right !important;" id="exampleModalLabel"> !إنتهت المهمة</h5>
			</div>
			<div class="modal-body">
				<form action="update_new_assigned_task.php" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="update_Status_Done" id="update_status_done">
					<h4 style="margin: 1rem; font-size:2.5rem; text-align: right;">هل أنت متأكد أنك انهيت المهمة؟</h4>

					<div class="modal-footer">
						<button type="button" style="font-size: 2rem; margin-right:2rem; width: 50px;" class="btn btn-secondary" data-dismiss="modal">لا</button>
						<button type="submit" style="font-size: 2rem;" name="updateIsDone" class="btn btn-primary">نعم</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php
include_once "../connect_database.php";

$taskID = $_GET['taskID'];/*!<Getting the ID value of the chosen post using $_GET which is a PHP super global variable which is used to collect form data after submitting an HTML form with method="get".*/
$sql1 = mysqli_query($conn,"SELECT * from taskAssigned where taskID='$taskID' ORDER BY assignedID ASC")// ORDER BY assignedID DESC
or die("Connection Failed");/*!<"$sql1" is the result returned by "mysqli_query(…)" is the function that executes the SQL queries (Selected query type is Select ordered by the ID of the comment).*/
while($row1=mysqli_fetch_assoc($sql1)){
	extract($row1);
	echo '<div class="panel panel-success">';
	echo '<div class="panel-heading">';
	$_SESSION['ASSIGNED_ID'] = $row1['assignedID'];
	echo '<h3 class="panel-title" id="head">Re-Assigned To : '.$row1['assignedTo'].'</h3>';
	echo '<div class="panel-body" style="color: black;">';
        echo '<div class="desc"><span class="desc_span">:المضمون</span> <br>'.$row1["description"].'</div>';
        echo '<div class="desc"><span class="desc_span">:موعد إنتهاء المهمة</span> </br>'.date("m/d/Y g:i A", strtotime($row1["taskDeadline"])).'</div>';
        echo '<div class="desc"><span class="desc_span">:أُضيفت بواسطة </span><br>'.$row1["addedBy"].'</div>';
        echo '<div class="desc"><span class="desc_span">:أُضيفت بتاريخ </span><br>'.date("m/d/Y g:i A", strtotime($row1["datetime"])).'</div>';
	    $newlink = "download_sub_tasks.php?id=". $row1['assignedID'];
        echo '<div class="download_btn"><td style="text-align: center;"><a href='.$newlink.' class="btn btn-info">تحميل الملف المرفق الجديد</a></div>';
	echo '</div>';
	echo '</div>';
	echo '</div>';
	echo "<br>";/*!<While loop is a control flow statement that allows code to be executed repeatedly based on a given Boolean condition, which is "$row1" is equal to the value of the fetched rows that are selected from the database.*/
}
$sql_command = mysqli_query($conn,"SELECT * FROM taskAssigned WHERE taskID='$taskID' ORDER BY assignedID DESC LIMIT 1");
$assignedRow = mysqli_fetch_assoc($sql_command);

if(strtotime($assignedRow['taskDeadline']) - $currentTemp > 0 && $assignedRow['isDone'] == 0 && ($assignedRow['assignedTo'] == $_SESSION['adminUserName'])) {
	?>
    <div style="margin: auto; text-align: center; margin-top:1rem;">
        <button type="button" class="btn btn-primary donebtn" style="margin-bottom: .5rem;">Done</button>
    </div>
	<?php
}else {
	echo '';
}

//SELECT * FROM taskAssigned WHERE taskID=40 ORDER BY assignedID DESC LIMIT 1
?>
<!--displaytasks-->
<script>
    $(document).ready(function(){
        $('.donebtn').on('click', function(){
            $('#donemodel').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function(){
                return $(this).text();
            }).get();
            console.log(data);

            $('#update_status_done').val(data[0]);

        });
    });
</script>
<style>
	.panel{
		background-color: lightgrey;
	}

	#head{
		padding-top: .5rem;
		text-align: center;
		height: 25px;
		font-size: 25px;
		font-weight: bold;
	}
	.desc{
		margin-top: .5rem;
		text-align: center;
		font-size: 20px;
		padding-top: 1rem;
	}
	.desc_span{
		text-align: center;
		font-weight: bold;
		font-size: 20px;
	}
	.download_btn{
		margin-top: 1rem;
		width:100%;
		text-align: center;
	}
</style>


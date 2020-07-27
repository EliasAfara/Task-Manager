<html>
<head>
	<?php include "../metaData.php";
	include "../connect_database.php";
	?>
    <!--Custom CSS-->
    <link rel="icon" type="image/ico" href="../../images/moclogo.gif" />
    <link rel="stylesheet" type="text/css" href="../../css/discussion_board/global.css">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="../../css/discussion_board/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../css/discussion_board/bootstrap.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!--Script-->
    <script src="../../js/jquery.js"></script>
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/bootstrap.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
</head>
<body>

<!--Open Modal -->
<div class="modal fade" id="openaddnewtaskmodel"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Check Announcement</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!--Add new task assignment model-->
                <form action="add_task_new_assigned.php" method="post" enctype="multipart/form-data">
					<?php include_once "../errors.php";?>
                    <h2>Add Task</h2>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="start">Task Deadline *</label><br>
                            <input type="date" id="start" name="taskDeadline"
                                   value="2020-01-01" class="form-control"
                                   min="2020-01-01" max="2030-01-01" required>
                        </div>
                        <input type="hidden" name="taskID" value="<?php echo $_GET['taskID'];?>">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputS"><i><b>Assigned To *</b></i></label>
                            <select id="inputSemester" class="form-control" name="assignedTo" required>
                                <option selected  value="<?php echo isset($_POST['assignedTo']) ? $_POST['assignedTo'] : '' ?>" disabled>Choose...</option>
                                <option>tarek.swaidane</option>
                                <option>elias.afara</option>
                                <option>ali.nehme</option>
                                <option>batoul.mostafa</option>
                                <option style="font-style: italic;">To General</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <div class="form-group">
                            <label for="name">Description *</label>
                            <input type="text" id="name" name="description" required
                                   class="form-control" placeholder="Description"
                                   minlength="5" maxlength="300" size="10">
                        </div>
                    </div>

                    <div>
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlFile1"><i><b>Choose a File...<br> Only accept (pdf, docx)</b></i></label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="task_Uploaded"
                                   value="<?php echo isset($_POST['task_Uploaded']) ? $_POST['task_Uploaded'] : '' ?>">
                        </div>
                    </div>

                    <input type="submit" class="btn btn-primary" value="SUBMIT" name="submitNewAssignedTask">
                </form>
            </div>
        </div>
    </div>
</div>

<header>
	<?php include "task_navbar.php";?>
</header>
<main>
    <div class="container" style="margin:7% auto;">

        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title" style="text-align: center; font-size: 20px;">المهمات</h3>
            </div>
            <div class="panel-body">
                <!-- Display Topic Information (Title, Date and Comment). -->
				<?php include('display_task_information.php') ?>
            </div>
        </div>
        <div id="comments">
            <!-- Display the comments related to the chosen topic. -->
			<?php include('display_new_task_assignment.php') ?>
        </div>
        <hr>
        <div class="col-sm-5 col-md-5 sidebar">
			<?php

			$temp = $_GET['taskID'];

			$sql = "SELECT * FROM taskAssigned WHERE taskID='$temp'ORDER BY assignedID DESC LIMIT 1";//OR SELECT * FROM tasks WHERE taskID='$temp'ORDER BY assignedID DESC LIMIT 1
			$results = mysqli_query($conn, $sql);
			$row = $results->fetch_assoc();

			$currentTemp = strtotime(date("Y-m-d"));

			if(mysqli_num_rows($results) >= 0 && ($_SESSION['adminUserName'] == $row['assignedTo'] && (strtotime($row['taskDeadline']) - $currentTemp > 0) && ($row['isDone'] == 1))){//&& ?>
                <h3>Re-Assign this Task</h3>
                <button type="button" class="btn btn-info addNewTaskBtn" style="margin-bottom: .5rem;">Add New Task</button>
			<?php }?>
        </div>
    </div>
</main>

<script>
    //pop up re assign a new task
    $(document).ready(function(){
        $('.addNewTaskBtn').on('click', function(){
            $('#openaddnewtaskmodel').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function(){
                return $(this).text();
            }).get();
            console.log(data);

            // $('#open_id').val(data[0]);
            // $('#showtitle').val(data[2]);
            // $('#showbody').val(data[1]);


        });
    });
</script>

</body>
</html>


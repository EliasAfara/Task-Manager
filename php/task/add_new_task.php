<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../../css/tasks/addNewTask.css">
    <link rel="icon" type="image/ico" href="../../images/moclogo.gif" />
	<?php include_once "../metaData.php";?>
</head>

<body>
<header>
	<?php session_start();
	include('task_navbar.php');?>
</header>

<main>
    <form action="add_tasks.php" method="post" enctype="multipart/form-data">
		<?php include_once "../errors.php";?>
        <h2>إضافة مهمة</h2>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="BookTitle">إسم المهمة *</label>
                <input type="text" class="form-control" value="<?php echo isset($_POST['taskName']) ? $_POST['taskName'] : '' ?>" name="taskName" placeholder="Task Name" required>
            </div>
            <div class="form-group col-md-6">
                <label for="start">موعد إنتهاء المهمة *</label><br>
                <input type="date" id="start" name="taskDeadline"
                       value="2020-01-01" class="form-control"
                       min="" max="2030-01-01">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputS"><i><b>مخصصة إلى *</b></i></label>
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
                <label for="name">المضمون *</label>
                <input type="text" id="name" name="description" required
                       class="form-control" placeholder="Description"
                       minlength="5" maxlength="300" size="10">
            </div>
        </div>
        <div>
            <div class="form-group col-md-6">
                <label for="exampleFormControlFile1"><i><b>...إختيار الملف<br>(pdf, docx) نقبل فقط</b></i></label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="task_Uploaded"
                       value="<?php echo isset($_POST['task_Uploaded']) ? $_POST['task_Uploaded'] : '' ?>">
            </div>
        </div>

        <input type="submit" class="btn btn-primary" value="إضافة" name="submitTask">
    </form>
</main>
</body>
</html>

<style>
    main{
        padding-top: 6rem;
    }

    h2{
        text-align: center;
        padding-bottom: 1rem;
        font-style: italic;
    }

    form{
        width: 80%;
        padding: 2rem;
        margin: auto;
        background-color: lightgray;
        font-weight: bold;
        font-style: italic;
        border-radius: 1rem;
    }
</style>
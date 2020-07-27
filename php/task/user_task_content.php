<?php include "../connect_database.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "../metaData.php"; ?>
	<link rel="icon" type="image/ico" href="../../images/moclogo.gif" />
	<link rel="stylesheet" type="text/css" href="../../css/Announcements/displayutil.css">
	<link rel="stylesheet" type="text/css" href="../../css/Announcements/displaymain.css">
</head>

<header>
	<?php include "task_navbar.php";?>
</header>

<body style="height: 100vh;">

<!-- ############################################################################################################################################################################## -->

<!-- Edit Modal -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">تعديل المهمة؟</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<form action="update_tasks.php" method="POST" enctype="multipart/form-data">

					<input type="hidden" name="update_id" id="update_id">

					<div class="form-row">
						<div class="name" style="width:100%; text-align: center; padding: 1rem; font-size: 2rem;">العنوان : </div>
						<div class="value" style="width: 100%; margin: auto;">
							<input id="title" class="input--style-6" type="text" name="title" required style="text-align: center; width: 100%; margin: auto; padding: 1rem; background-color: lightgrey;">
						</div>
					</div>
					<div class="form-row" style="margin-bottom: 1rem;">
						<div class="name"style="text-align: center; width: 100%; padding: 1rem; font-size: 2rem;">المضمون :</div>
						<div class="value" style="widows: 100; margin: auto;">
							<div class="input-group">
								<textarea id="body" class="textarea--style-6" name="body" style="background-color: lightsteelblue;"></textarea>
							</div>
						</div>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">إقفال</button>
						<button type="submit" name="updatedata" class="btn btn-primary">تعديل</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- ######################################################################################################################################################################################### -->
<!-- ############################################################################################################################################################################## -->

<!--Delete Modal -->
<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">إزالة المهمة؟</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="delete_tasks.php" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="delete_id" id="delete_id">
					<h4> هل أنت متأكد أنك ترية إزالة المهمة؟</h4>

					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">كلا</button>
						<button type="submit" name="deletedata" class="btn btn-primary">نعم!</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- ######################################################################################################################################################################################### -->
<!-- ############################################################################################################################################################################## -->

<!--Open Modal -->
<div class="modal fade" id="openmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">رؤية الإعلان</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<input type="hidden" name="open_id" id="open_id">
				<div class="form-row">
					<h3 style="text-align: center; width: 100%; padding: 1rem;"> :  إسم المهمة  </h3>
				</div>
				<div class="form-row" style="width: 100%;">
					<input id="showtitle" class="input--style-6" type="text" name="title" readonly style="text-align: center; margin: auto;  padding: 1rem; font-size:2rem; font-weight: bold;"/>
				</div>
				<div class="form-row">
					<h3 style="text-align: center; width: 100%; padding: 1rem;"> : إضيفت بواسطة</h3>
				</div>
				<div class="form-row">
					<div class="value" style="width: 100%;">
						<input id="showbody" name="body" style="text-align: center; margin: auto; font-size: 1.5rem; width: 100%;" readonly/>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--Done Modal -->
<div class="modal fade" id="donemodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<!--                <button type="button" class="close" style="align-content: flex-end;" data-dismiss="modal" aria-label="Close">-->
				<!--                    <span aria-hidden="true">&times;</span>-->
				<!--                </button>-->
				<h5 style="text-align: right !important;" id="exampleModalLabel"> !إنتهت المهمة</h5>
			</div>
			<div class="modal-body">
				<form action="update_task_status.php" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="updateStatusDone" id="updateStatusDone">
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

<!-- ######################################################################################################################################################################################### -->
<div style="width: 40vw; margin: auto; margin-top: 1rem;">
	<h2 style="text-align: center; font-weight: bold; padding-bottom: 2rem; color: red;">جدول المهام</h2>
	<!--        <h3 style="text-align: center;">Filter Table:</h3>-->
	<!--        <label>-->
	<!--            <select name="cars" style="width: 40vw; margin: auto; height: 3vw; margin-top: .5rem;">-->
	<!--                <option value="volvo" selected disabled>الخيارات</option>-->
	<!--                <option value="volvo">المهام الموكلة إلي</option>-->
	<!--                <option value="saab">المهام الغير المنجزة</option>-->
	<!--                <option value="fiat">المهام المطلوبة لليوم</option>-->
	<!--                <option value="audi">المهام التي أودعتها</option>-->
	<!--            </select>-->
	<!--        </label>-->
</div>
<div>
	<div>
		<div style="width: 98vw !important; background-color: white; color: black; margin: auto; margin-top: 2rem;">
			<div>
				<div style="padding: 1rem .5rem 1rem .5rem; background-color: dimgray;">
					<table style="width: 98vw; table-layout: fixed;">
						<thead>
						<tr style="text-align: center; color: white;">
							<th>إسم المهمة</th>
							<th>المضمون</th>
							<th>موجهة إلى</th>
							<th>موعد إنتهاء المهمة</th>
							<th>أُضيفت بتاريخ</th>
							<th>تحميل الملف</th>
							<th>الإجراءات</th>
						</tr>
						</thead>
					</table>
				</div>

				<div style="height: 100%;">
					<table style="table-layout: fixed;">
						<?php
						$query = "SELECT * FROM tasks ORDER BY taskID DESC";
						$results = mysqli_query($conn, $query);

						if(mysqli_num_rows($results) > 0){
							// output data of each row
							while($row = $results->fetch_assoc()) {
								$link = '';
								?>
								<tbody>
								<tr style="height: 15vh;">
									<td style="display: none;" > <?php echo $row['taskID']  ?></td>
									<td style="display: none;"> <?php echo $row['description']  ?></td>
									<td style="text-align: center;"> <?php echo $row['taskName']  ?></td>
									<td style="text-align: center;"> <?php echo $row['description'] ?></td>
									<td style="text-align: center; display: none;"> <?php echo $row['taskAddedBy'] ?></td>
									<td style="text-align: center;"> <?php echo $row['taskAssigned'] ?></td>
									<td style="text-align: center;"> <?php echo date('d-m-Y',strtotime($row['taskDeadline'])) ?></td>
									<td style="text-align: center;"> <?php echo date('(d-m-Y)  h:i:s',strtotime($row['addedAt'])) ?></td>
									<td style="text-align: center;">
										<a href= "download_tasks.php?id=<?php echo $row['taskID'];?>" class="btn btn-info">Download File</a></td>
									<td>
										<button type="button" class="btn btn-info openbtn" style="margin-bottom: .5rem;">Open</button>
										<?php $currentTemp = strtotime(date("Y-m-d"));
										if(strtotime($row['taskDeadline']) - $currentTemp > 0 && $row['isDone'] == 0 && ($_SESSION['adminUserName'] == $row['taskAddedBy'])){ ?>
											<button type="button" class="btn btn-primary editbtn" style="margin-bottom: .5rem;">Edit</button><br>
											<button type="button" class="btn btn-danger deletebtn">Delete</button>
										<?php } else if ($row['isDone'] == 0 && strtotime($row['taskDeadline']) - $currentTemp < 0){?>
											<button type="button" class="btn btn-danger donebtn" style="margin-bottom: .5rem;" disabled>Not Done</button>
										<?php } else if(strtotime($row['taskDeadline']) - $currentTemp > 0 && $row['isDone'] == 0 && ($_SESSION['adminUserName']) == $row['taskAssigned']) {?>
											<button type="button" class="btn btn-primary donebtn" style="margin-bottom: .5rem;">Done</button>
										<?php }
										else if($row['isDone'] == 1){
											echo '<a href="task_content.php?taskID=' . $row['taskID'] . '">
                                                    <button class="btn btn-warning" style="margin-bottom: .5rem; color: white;">View</button>
                                                  </a>';
											?>
											<button type="button" class="btn btn-success donebtn" style="margin-bottom: .5rem;" disabled>Done</button>
										<?php }?>
									</td>
								</tr>
								</tbody>
							<?php }
							echo "</table>";
						} else { echo "<h5 style='text-align: center; margin: 2rem;'>ليس هناك مهام مضافة</h5>"; }
						mysqli_close($conn);
						?>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="../../js/display_tasks.js"></script>
<!--displaytasks-->
<script>
    $(document).ready(function(){
        $('.openbtn').on('click', function(){
            $('#openmodal').modal('show');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function(){
                return $(this).text();
            }).get();
            console.log(data);

            $('#open_id').val(data[0]);
            $('#showtitle').val(data[2]);
            $('#showbody').val(data[4]);


        });
    });
</script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "../server.php";
	include_once "../metaData.php";?>
    <link rel="icon" type="image/ico" href="../../images/moclogo.gif" />
	<link rel="stylesheet" href="../../css/PersonalProfiles/AdminProfile.css">
</head>
<body>

<header>
	<?php include('profile_navbar.php');?>
</header>

<main>
	<div class="container" style="margin-bottom: 5rem; padding-top: 1rem !important;">
		<div class="card">
			<div class="img-cont">
				<img src="../../images/moclogo.gif" alt="Profile Picture">
			</div>

			<div class="card-body">
				<div>
					<span class="sideData"><i><b>الإسم الكامل</b></i> </span>
					<h5 id="fullName"><?php echo $_SESSION['userFullName'];?></h5>
				</div>

				<div>
					<span class="sideData"><i><b>إسم المستخدم</b></i></span>
					<h5 style="font-style: italic" id="email"><?php echo $_SESSION['userUserName'];?></h5>
				</div>

				<div>
					<span class="sideData"><i><b>البريد الإلكتروني</b></i></span>
					<h5 style="font-style: italic" id="email"><?php echo $_SESSION['userEmail'];?></h5>
				</div>

				<div>
					<span class="sideData"><i><b>رقم الهاتف</b></i></span>
					<h5 style="font-style: italic" id="email"><?php echo $_SESSION['userPhoneNumber'];?></h5>
				</div>

				<div>
					<span class="sideData"><i><b>الوظيفة / المنصب</b></i></span>
					<h5 style="font-style: italic" id="email"><?php echo $_SESSION['userJobOrPosition'];?></h5>
				</div>

				<div>
					<span class="sideData"><i><b>موقع المكتب الشخصي</b></i></span>
					<h5 style="font-style: italic" id="email"><?php echo $_SESSION['userOfficeLocation'];?></h5>
				</div>

				<div>
					<span class="sideData"><i><b>كلمة المرور</b></i></span>
					<p class="card-text" id="pass"><?php echo $_SESSION['userPassword'];?></p>
					<a href="#modalWindow2" class="btn btn-primary">تغيير كلمة المرور</a>
				</div>

				<div id="modalWindow2">
					<div>
						<form method="post">
							<a href="#close" style="color: white;">X</a><br>
							<p>تغيير كلمة المرور</p>
							<input type="password" name="old_pass" placeholder="كلمة المرور القديمة" value="<?php echo $_POST['old_pass']?>" class="input-chng" required><br><br>
							<input type="password" name="new_pass" placeholder=" كلمة المرور الجديدة" value="<?php echo $_POST['new_pass']?>" class="input-chng" required><br><br>
							<input type="password" name="conf_pass" placeholder="تأكيد كلمة المرور" value="<?php echo $_POST['conf_pass']?>" class="input-chng" required>
							<br><br>
							<input type="submit" class="btn btn-primary" value="تغيير كلمة المرور" name="Change-Password">
						</form>
					</div>
				</div>

			</div>

		</div>
	</div>
<!--	<div>-->
<!--		<h3 style="text-align: center;">Messages In your inbox:</h3>-->
<!--	</div>-->
</main>


</body>
</html>
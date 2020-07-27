<!DOCTYPE HTML>
<html lang="en">
<head>
	<?php include_once "metaData.php";
	require_once "server.php"; ?>
	<link rel="stylesheet" href="../css/LogIn/login.css">
</head>
<body>

<header>
</header>

<main>
	<div id="form">
		<div id="pu-logo">
			<img src="../images/moclogo.gif" alt="ministry of culture logo">
		</div>

		<div id="formFields">
			<?php include "errors.php"; ?>
			<form action="" method="post">
				<div class="form-group">
					<label for="exampleInputEmail1" style=" font-weight: bold; font-size: 20px;">إسم المستخدم</label>
					<input type="text" class="form-control" id="InputEmail" name="userUserName" value="<?php echo isset($_POST['userUserName']) ?  $_POST['userUserName'] : '' ?>" aria-describedby="emailHelp" placeholder="أدخل إسم المستخدم" required autofocus>
				</div>

				<div class="form-group">
					<label for="exampleInputPassword1" style="font-weight: bold; font-size: 20px;">كلمة المرور</label>
					<input type="password" class="form-control" id="InputPassword" name="userPassword" value="<?php echo isset($_POST['userPassword']) ? $_POST['userPassword'] : '' ?>" maxlength="15" placeholder="أدخل كلمة المرور" required>
				</div>

				<div class="form-button">
					<button type="submit" class="btn btn-primary" name="userLogIn">تسجيل الدخول</button>
				</div>
				<div style="width: 100%; text-align: center;">
					<a href="admin_logIn.php" style="text-align: center; font-size: 2rem;">أُدخل كمشرف</a>
				</div>
				<div id="copyRights">
					<p>  جميع الحقوق محفوظة | وزارة الثقافة &copy;</p>
				</div>
			</form>
		</div>
	</div>
</main>

</body>
</html>

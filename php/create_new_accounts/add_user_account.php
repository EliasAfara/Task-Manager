<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="../../css/newAccount/userAccount.css">
    <link rel="icon" type="image/ico" href="../../images/moclogo.gif" />
	<?php include_once "../metaData.php";
	require_once "../server.php"; ?>
</head>
<body>

<header>
	<?php include('create_new_accounts_navbar.php');?>
</header>

<main>
	<div id="form" style="padding-top: 1rem;">
		<p id="pageTitle">إنشاء حساب مستخدم جديد</p>
		<div id="formFields">
			<form action="" method="post">
				<?php include "../errors.php";?>
				<div class="form-group">
					<label for="exampleInputUsername1"> * الإسم الثلاثي</label>
					<input type="text" class="form-control" name="fullName" value="<?php echo isset($_POST['fullName']) ? $_POST['fullName'] : '' ?>" id="InputUserName" placeholder="ادخل الإسم الثلاثي" required autofocus>
				</div>

				<div class="form-group" style="padding-top: 1rem;">
					<label for="exampleInputEmail1">البريد الإلكتروني</label>
					<input type="email" class="form-control" name="email"   value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>" id="InputEmail" aria-describedby="emailHelp" placeholder="ادخل البريد الإلكتروني">
				</div>

				<div class="form-group">
					<label for="exampleInputUsername1"> * إسم المستخدم</label>
					<input type="text" class="form-control" name="userName" value="<?php echo isset($_POST['userName']) ? $_POST['userName'] : '' ?>" id="InputUserName" placeholder="ادخل إسم المستخدم" required autofocus>
				</div>

                <div class="form-group">
                    <label for="exampleInputUsername1"> * الوظيفة / المنصب</label>
                    <select id="inputState" class="form-control" name="jobOrPosition" required>
                        <option selected value="<?php echo isset($_POST['jobOrPosition']) ? $_POST['jobOrPosition'] : '' ?>" disabled>الخيارات</option>
                        <option>مستشار إعلامي</option>
                        <option>مستشار قانوني</option>
                        <option>مستشار قاضي</option>
                        <option>مترجم</option>
                        <option>أخر</option>
                    </select>
                </div>

				<div class="form-group">
					<label for="exampleInputUsername1"> * رقم الهاتف</label>
					<input type="number" class="form-control" name="phoneNumber" value="<?php echo isset($_POST['phoneNumber']) ? $_POST['phoneNumber'] : '' ?>" id="InputUserName" placeholder="ادخل رقم الهاتف" required>
				</div>

				<div class="form-group">
					<label for="exampleInputUsername1"> * موقع المكتب الشخصي</label>
					<input type="text" class="form-control" name="officelocation" value="<?php echo isset($_POST['officelocation']) ? $_POST['officelocation'] : '' ?>" id="InputUserName" placeholder="موقع المكتب الشخصي" required>
				</div>

				<div class="form-group">
					<label for="exampleInputPassword1"> * كلمة المرور</label>
					<input type="password" class="form-control" name="password-1"  value="<?php echo isset($_POST['password-1']) ? $_POST['password-1'] : '' ?>" id="InputPassword" placeholder="ادخل كلمة المرور" required>
				</div>

				<div class="form-group">
					<label for="exampleInputPassword1"> * تأكيد كلمة المرور</label>
					<input type="password" class="form-control" name="password-2" value="<?php echo isset($_POST['password-2']) ? $_POST['password-2'] : '' ?>" id="InputPassword" placeholder="ادخل تأكيد كلمة المرور" required>
				</div>

				<div class="form-button">
					<button type="submit" class="btn btn-primary" name="registerUserAccount" id="registerButton">إنشاء الحساب</button>
				</div>

				<div id="copyRights">
					<hr>
					<p>  جميع الحقوق محفوظة | وزارة الثقافة &copy;</p>
				</div>
			</form>
		</div>
	</div>
</main>

</body>
</html>

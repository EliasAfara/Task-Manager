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
                    <label for="exampleInputEmail1" style=" font-weight: bold; font-size: 20px;">إسم المشرف</label>
                    <input type="text" class="form-control" id="InputEmail" name="adminUserName" value="<?php echo isset($_POST['adminUserName']) ?  $_POST['adminUserName'] : '' ?>" aria-describedby="emailHelp" placeholder="أدخل إسم المشرف" required autofocus>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1" style=" font-weight: bold; font-size: 20px;">كلمة المرور</label>
                    <input type="password" class="form-control" id="InputPassword" name="password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : '' ?>" maxlength="15" placeholder="أدخل كلمة المرور" required>
                </div>

                <div class="form-button">
                    <button type="submit" class="btn btn-primary" name="adminLogIn">تسجيل الدخول</button>
                </div>
                <div style="width: 100%; text-align: center;">
                    <a href="user_logIn.php" style="text-align: center; font-size: 2rem;">أُدخل كمستخدم</a>
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
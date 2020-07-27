<?php

require_once "connect_database.php";

//Create Admin Account
if (isset($_POST['registerAdminAccount'])){
	//receive all input values from the form
	$fullName = mysqli_real_escape_string($conn, $_POST['fullName']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$userName = mysqli_real_escape_string($conn,$_POST['userName']);
	$phoneNumber = mysqli_real_escape_string($conn,$_POST['phoneNumber']);
	$positionOrJob = mysqli_real_escape_string($conn,$_POST['jobOrPosition']);
	$officeLocation = mysqli_real_escape_string($conn,$_POST['officeLocation']);

	$password_1 = mysqli_real_escape_string($conn, $_POST['password-1']);
	$password_2 = mysqli_real_escape_string($conn, $_POST['password-2']);

	// form validation: ensure that the form is correctly filled ...
	// by adding (array_push()) corresponding error unto $errors array
	if (empty($fullName) || !preg_match('/[a-zA-Z]{3,}$/',$fullName)){
		array_push($errors, "الرجاء ادخال الإسم الكامل بطريقة صحيحة<br>(الأحرف الأبجدية فقط مسموحة)");
	}

	if (empty($userName) || !preg_match('/[a-zA-Z0-9]{3,}\.[a-zA-Z0-9]{3,}$/',$userName)){
		array_push($errors, "الرجاء ادخال إسم المستخدم بطريقة صحيحة<br>(الأحرف الأبجدية فقط مسموحة)");
	}

	if (empty($phoneNumber) || !preg_match('/^[0-9]{8,}$/',$phoneNumber)){
		array_push($errors, "الرجاء ادخال رقم الهاتف بطريقة صحيحة<br>(الأرقام فقط مسموحة)");
	}

	if (empty($positionOrJob) || empty($password_1)|| empty($password_2)){
		array_push($errors, "الرجاء تعبئة جميع الحقول");
	}

	if (empty($officeLocation) || !preg_match('/[a-zA-Z0-9 ]{5,}$/',$officeLocation)){
		array_push($errors, "الرجاء ادخال موقع المكتب بطريقة صحيحة<br>(على الآقل ٥ أرقام أو أحرف)");
	}

	if(!preg_match("/[A-Za-z0-9]{6,}$/",$password_1)) {
		array_push($errors, "الرجاء ادخال كلمة السر  بطريقة صحيحة<br>( على الأقل ٦ أرقام أو أحرف مسموحة)");
	}

	if ($password_1 != $password_2) {
		array_push($errors, "الكلمتان السريتان لا تتطابقان");
	}

	if (preg_match('/[a-zA-Z0-9]{3,}\.[a-zA-Z0-9]{3,}$/',$userName)){
		// first check the database to make sure
		// a user does not already exist with the same username and/or email

		$user_check_query2 = "SELECT * FROM Admins WHERE userName='$userName'";
		$result2 = mysqli_query($conn, $user_check_query2);

		if(mysqli_num_rows($result2)>0){
			array_push($errors,"اسم المستخدم موجود مسبقاً");
		} else {
			// Finally, register user if there are no errors in the form
			if (count($errors) == 0) {
				$password = crypt($password_1, 'nIHjHVQAxYQqCEvvnGNoOwgeItSwoWwkDanXhEcz');
				//encrypt the password before saving in the database

				$query = "INSERT INTO Admins
  			  VALUES('$fullName','$email','$userName','$phoneNumber','$positionOrJob','$officeLocation','$password')";

				if (mysqli_query($conn, $query)) {
					array_push($errors, "تم إنشاء الحساب بنجاح");
				}else{
					array_push($errors,"هناك خطأ تقني موجود");
				}
			}
		}
	}else{
		array_push($errors,"الرجاء التحقق من شكل اسم المستخدم");
	}
}

//*****************************************************************************************************************
//*****************************************************************************************************************
//*****************************************************************************************************************
//*****************************************************************************************************************
//*****************************************************************************************************************

//Create User Account
if (isset($_POST['registerUserAccount'])){
	//receive all input values from the form
	$fullName = mysqli_real_escape_string($conn, $_POST['fullName']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$userName = mysqli_real_escape_string($conn,$_POST['userName']);
	$phoneNumber = mysqli_real_escape_string($conn,$_POST['phoneNumber']);
	$officeLocation = mysqli_real_escape_string($conn,$_POST['officelocation']);
	$positionOrJob = mysqli_real_escape_string($conn,$_POST['jobOrPosition']);
	$profilePicture = mysqli_real_escape_string($conn,$_POST['imageUploaded']);

	$password_1 = mysqli_real_escape_string($conn, $_POST['password-1']);
	$password_2 = mysqli_real_escape_string($conn, $_POST['password-2']);

	// form validation: ensure that the form is correctly filled ...
	// by adding (array_push()) corresponding error unto $errors array
	if (empty($fullName) || !preg_match('/[a-zA-Z]{3,}$/',$fullName)){
		array_push($errors, "الرجاء ادخال الإسم الكامل بطريقة صحيحة<br>(الأحرف الأبجدية فقط مسموحة)");
	}

	if (empty($userName) || !preg_match('/[a-zA-Z0-9]{3,}\.[a-zA-Z0-9]{3,}$/',$userName)){
		array_push($errors, "الرجاء ادخال إسم المستخدم بطريقة صحيحة<br>(الأحرف الأبجدية و الآرقام فقط مسموحة)");
	}

	if (empty($phoneNumber) || !preg_match('/^[0-9]{8,}$/',$phoneNumber)){
		array_push($errors, "الرجاء ادخال رقم الهاتف بطريقة صحيحة<br>(الأرقام فقط مسموحة)");
	}

	if (empty($positionOrJob) || empty($password_1)|| empty($password_2)){
		array_push($errors, "الرجاء تعبئة جميع الحقول");
	}

	if (empty($officeLocation) || !preg_match('/[a-zA-Z0-9 ]{5,}$/',$officeLocation)){
		array_push($errors, "الرجاء ادخال موقع المكتب بطريقة صحيحة<br>(الأحرف الأبجدية و الآرقام فقط مسموحة)");
	}

	if(!preg_match("/[A-Za-z0-9]{6,}$/",$password_1)) {
		array_push($errors, "الرجاء ادخال كلمة السر  بطريقة صحيحة<br>( على الأقل ٦ أرقام أو أحرف مسموحة)");
	}

	if ($password_1 != $password_2) {
		array_push($errors, "الكلمتان السريتان لا تتطابقان");
	}

	if (preg_match('/[a-zA-Z0-9]{3,}\.[a-zA-Z0-9]{3,}$/',$userName)){
		// first check the database to make sure
		// a user does not already exist with the same username and/or email

		$user_check_query2 = "SELECT * FROM users WHERE UserName='$userName'";
		$result2 = mysqli_query($conn, $user_check_query2);

		if(mysqli_num_rows($result2)>0){
			array_push($errors,"اسم المستخدم موجود مسبقاً");
		}  else {
			// Finally, register user if there are no errors in the form
			if (count($errors) == 0) {
				$password = crypt($password_1, 'nIHjHVQAxYQqCEvvnGNoOwgeItSwoWwkDanXhEcz');
				//encrypt the password before saving in the database

				$query = "INSERT INTO users 
				VALUES('$fullName','$email','$userName','$phoneNumber','$officeLocation','$password','$positionOrJob')";

				if (mysqli_query($conn, $query)) {
					array_push($errors, "تم إنشاء الحساب بنجاح");
				}else{
					array_push($errors,"هناك خطأ تقني موجود");
				}
			}
		}
	}else{
		array_push($errors,"Please Check your username format");
	}
}

//*****************************************************************************************************************
//*****************************************************************************************************************
//*****************************************************************************************************************
//*****************************************************************************************************************
//*****************************************************************************************************************

//Admin LogIn
if (isset($_POST['adminLogIn']))
{
	$adminUserName = mysqli_real_escape_string($conn, $_POST['adminUserName']);
	$adminPassword = mysqli_real_escape_string($conn, $_POST['password']);

	if (empty($adminUserName) || empty($adminPassword) ) {
		array_push($errors, "الرجاء تعبئة جميع الحقول");
	}

	if ((preg_match('/^[a-zA-Z]{3,}\.[a-zA-Z]{3,}/',$adminUserName))){
	}else{
		array_push($errors,"الرجاء التحقق من اسم المشرف");
	}

	if (count($errors) == 0) {
		$pass_word = crypt($adminPassword, 'nIHjHVQAxYQqCEvvnGNoOwgeItSwoWwkDanXhEcz');

		$sql = "SELECT userName,password FROM Admins WHERE userName = '$adminUserName' AND password = '$pass_word' ";
		$result = mysqli_query($conn, $sql);
		$check = mysqli_fetch_assoc($result);

		if (isset($check) && $check['password']==$pass_word) {
			$queryget = mysqli_query($conn, "SELECT * FROM Admins WHERE userName = '$adminUserName'") or die ("Query didnt work");
			$row = mysqli_fetch_assoc($queryget);

			$_SESSION['adminFullName']= $row['FullName'];
			$_SESSION['adminEmail'] = $row['email'];
			$_SESSION['adminUserName'] = $row['userName'];
			$_SESSION['adminPhoneNumber'] = $row['phoneNumber'];
			$_SESSION['adminJobOrPosition'] = $row['jobOrPosition'];
			$_SESSION['adminOfficeLocation'] = $row['officeLocation'];

			$passlength = '';
			$j = strlen($adminPassword);
			for ($i = 0; $i < $j; $i++) {
				$passlength .= '.';
			}

			$_SESSION['adminPassword'] = $passlength;
			$_SESSION['adminSuccess'] = "You are now logged in";

			session_regenerate_id();
			$_SESSION['adminLogIn'] = 'loggedIn';

			header('Location: admin_index.php');
		} else {
			array_push($errors, "الرجاء التحقق من اسم المشرف أو كلمة السر");
		}
	}
}

//*****************************************************************************************************************
//*****************************************************************************************************************
//*****************************************************************************************************************
//*****************************************************************************************************************
//*****************************************************************************************************************

//User LogIn
if (isset($_POST['userLogIn']))
{
	$user_UserName = mysqli_real_escape_string($conn, $_POST['userUserName']);
	$user_Password = mysqli_real_escape_string($conn, $_POST['userPassword']);

	if (empty($user_UserName) || empty($user_Password) ) {
		array_push($errors, "الرجاء تعبئة جميع الحقول");
	}

	if ((preg_match('/^[a-zA-Z]{3,}\.[a-zA-Z]{3,}/',$user_UserName))){
	}else{
		array_push($errors,"الرجاء التحقق من اسم المستخدم");
	}

	if (count($errors) == 0) {
		$pass_word = crypt($user_Password, 'nIHjHVQAxYQqCEvvnGNoOwgeItSwoWwkDanXhEcz');

		$sql = "SELECT userName,password FROM users WHERE userName = '$user_UserName' AND password = '$pass_word' ";
		$result = mysqli_query($conn, $sql);
		$check = mysqli_fetch_assoc($result);

		if (isset($check) && $check['password']==$pass_word) {
			$queryget = mysqli_query($conn, "SELECT * FROM users WHERE userName = '$user_UserName'") or die ("Query didnt work");
			$row = mysqli_fetch_assoc($queryget);

			$_SESSION['userFullName']= $row['FullName'];
			$_SESSION['userEmail'] = $row['email'];
			$_SESSION['userUserName'] = $row['userName'];
			$_SESSION['userPhoneNumber'] = $row['phoneNumber'];
			$_SESSION['userJobOrPosition'] = $row['jobPosition'];
			$_SESSION['userOfficeLocation'] = $row['officeLocation'];

			$passlength = '';
			$j = strlen($user_Password);
			for ($i = 0; $i < $j; $i++) {
				$passlength .= '.';
			}
			session_regenerate_id();
			$_SESSION['logIn'] = "loggedIn";

			$_SESSION['userPassword'] = $passlength;
			$_SESSION['userSuccess'] = "You are now logged in";
			session_regenerate_id();

			header('Location: user_index.php');
		} else {
			array_push($errors, "الرجاء التحقق من اسم المستخدم أو كلمة السر");
		}
	}
}

//Admin Change Password
if (isset($_POST['ChangePassword'])){
	$password_entered = $_POST['old_pass'];
	$admin_username = $_SESSION['adminUserName'];
	$queryget = mysqli_query ($conn,"SELECT password FROM Admins WHERE userName = '$admin_username'")or die ("Query didnt work");
	$row = mysqli_fetch_assoc($queryget);
	$old_admin_pass = $row['password'];
	//user entered pass
	$pass_entered = crypt($password_entered,'nIHjHVQAxYQqCEvvnGNoOwgeItSwoWwkDanXhEcz');
	//check passwords
	if($pass_entered==$old_admin_pass)
	{
		$newpass = $_POST['new_pass'];
		$confpass = $_POST['conf_pass'];
		if (preg_match("/^[A-Za-z0-9@#!?]{6,}$/",$newpass)) {
			//check the new password
			if ($newpass == $confpass) {
				$newpass = crypt($newpass, 'nIHjHVQAxYQqCEvvnGNoOwgeItSwoWwkDanXhEcz');
				//change password in db
				$querychange = mysqli_query($conn, "UPDATE Admins SET password='$newpass' WHERE username='$admin_username'");
				array_push($errors, "<br>Your password has been changed</br>Successfully.");
			} else {
				array_push($errors, "New passwords don't match!");
			}
		} else{
			array_push($errors,"<br>Your password has to be at least 6 characters long.<br>
														Should Only Contain A-Z, a-z, 0-9,<br>
														@ # ! ?<br>");
		}
	}
	else {
		array_push($errors, "Old password doesnt match!");
	}
}
//Announcements
// If upload button is clicked ...
if(isset($_POST['submit'])){
	// Get text & body information
	$title = mysqli_real_escape_string($conn, $_POST['title']);
	$body = mysqli_real_escape_string($conn, $_POST['body']);

	if(empty($title) || empty($body)){
		array_push($errors, "الرجاء تعبئة جميع الحقول");
	}

	$allowedExts = array("doc","pdf","docx");
	$temp = explode(".", $_FILES["file"]["name"]);
	$extension = end($temp);

	if (($_FILES["file"]["size"] < 800000) && in_array($extension, $allowedExts))
	{
		$pname = $_FILES["file"]["name"];
		$destination = 'files/' . "file_$pname";
		//Temporary file name to store file
		$tname = $_FILES["file"]["tmp_name"];

		//upload directory path
		//To move the specific file to specific location
		move_uploaded_file($tname, $destination);

	} else{
		$pname = "";
		array_push($errors, "هناك خطأ في التحميل. الرجاء تحميل الملف المرفق بالإعلان");
	}

	if(count($errors) == 0){
		$currentUser = $_SESSION['adminUserName'];
		$sql = "INSERT INTO Announcements(title, body, upload_date, file, fileName, addedBy) VALUES ('$title','$body',NOW(),'$tname','$pname','$currentUser')";
		// execute query
		if(mysqli_query($conn, $sql)){
			header("location: display_annoucements.php");

		}else{
			array_push($errors, "هناك خطأ تفني. الرجاء التحقق؟");
		}
	}
}

$conn->close();

?>

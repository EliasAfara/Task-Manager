<!DOCTYPE html>
<html lang="en">
<head>
	<?php
    include "../server.php";
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
                    <h5 id="fullName"><?php echo $_SESSION['adminFullName'];?></h5>
                </div>

                <div>
                    <span class="sideData"><i><b>إسم المشرف</b></i></span>
                    <h5 style="font-style: italic" id="email"><?php echo $_SESSION['adminUserName'];?></h5>
                </div>

                <div>
                    <span class="sideData"><i><b>البريد الإلكتروني</b></i></span>
                    <h5 style="font-style: italic" id="email"><?php echo $_SESSION['adminEmail'];?></h5>
                </div>

                <div>
                    <span class="sideData"><i><b>رقم الهاتف</b></i></span>
                    <h5 style="font-style: italic" id="email"><?php echo $_SESSION['adminPhoneNumber'];?></h5>
                </div>

                <div>
                    <span class="sideData"><i><b>الوظيفة / المنصب</b></i></span>
                    <h5 style="font-style: italic" id="email"><?php echo $_SESSION['adminJobOrPosition'];?></h5>
                </div>

                <div>
                    <span class="sideData"><i><b>موقع المكتب الشخصي</b></i></span>
                    <h5 style="font-style: italic" id="email"><?php echo $_SESSION['adminOfficeLocation'];?></h5>
                </div>

                <div>
                    <span class="sideData"><i><b>كلمة المرور</b></i></span>
                    <p class="card-text" id="pass"><?php echo $_SESSION['adminPassword'];?></p>
                    <a href="#modalWindow2" class="btn btn-primary">تغيير كلمة المرور</a>
                </div>

                <div id="modalWindow2">
                    <div>
                        <form method="post">
                            <p style="font-size: 2rem;">تغيير كلمة المرور</p>
                            <input type="password" name="old_pass" placeholder="كلمة المرور القديمة" value="<?php echo $_POST['old_pass']?>" class="input-chng" required><br><br>
                            <input type="password" name="new_pass" placeholder=" كلمة المرور الجديدة" value="<?php echo $_POST['new_pass']?>" class="input-chng" required><br><br>
                            <input type="password" name="conf_pass" placeholder="تأكيد كلمة المرور" value="<?php echo $_POST['conf_pass']?>" class="input-chng" required>
                            <br><br>
                            <input type="submit" class="btn btn-primary" style="margin-bottom: 1rem; font-size:1.4rem;" value="تغيير كلمة المرور" name="ChangePassword"><br>
                            <button href="" class="btn btn-primary">
                                <a href="#close" style="color: white; font-size:1.6rem; text-underline: blue; margin:1rem; padding:1rem;">أقفل</a>
                            </button><br>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
<!--    <div>-->
<!--        <h3 style="text-align: center;">Messages In your inbox:</h3>-->
<!--    </div>-->
</main>
<style>
    #modalWindow2 {
        position: fixed;
        font-family: arial,helvetica, sans-serif;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: rgba(0, 0, 0, 0.4);
        z-index: 99999;
        opacity:0;
        transition: opacity 400ms linear;
        pointer-events: none;
    }
    #modalWindow2:target {
        opacity:1;
        pointer-events: auto;
    }
    #modalWindow2 > div {
        width: 30vw;
        height: 50vh;
        position: relative;
        margin: 5% auto;
        padding: 20px 20px 13px 20px;
        border: solid;
        border-color: black;
        border-width : 2px;
        background: black;
        border-radius: 10px;
    }
    #modalWindow2 p{
        color: white;
    }
</style>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/setting/settings.css">

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<?php include_once "metaData.php";?>
</head>
<body>

<header>
	    <?php include('navbar.php');?>
</header>

<main>
    <h1 style="text-align: center; padding-top: 5rem; text-decoration: underline;">:صفحة الإعدادات</h1>

    <div class="flex-container middle" style="margin-bottom:5rem;">
        <div class="card">
            <img src="../images/seeTasks.png" alt="See Task" style="width:100%;">
            <hr>
            <p id="cardLabels"><a href="task/display_tasks.php" style="font-size: 2rem; font-weight: bold;">لائحة المهام</a></p>
        </div>

        <div class="card">
            <img src="../images/seeCalendar.png" alt="See Calendar" style="width:100%;">
            <hr>
            <p id="cardLabels"><a href="calendar/calendar.php" style="font-size: 2rem; font-weight: bold;">التقويم</a></p>
        </div>

        <div class="card">
            <img src="../images/announcement.png" alt="Announcement" style="width:100%;">
            <hr>
            <p id="cardLabels"><a href="announcements/display_annoucements.php" style="font-size: 2rem; font-weight: bold;">إعلانات</a></p>
        </div>

    </div>

    <div class="flex-container middle" style="margin-bottom:5rem;">
        <div class="card">
            <img src="../images/addnewtask.png" alt="Add a Task" style="width:100%; margin: auto;">
            <hr>
            <p id="cardLabels"><a href="task/add_new_task.php" style="font-size: 2rem; font-weight: bold;">إضافة مهمة جديدة</a></p>
        </div>

        <div class="card">
            <img src="../images/addanAnnouncement.png" alt="John" style="width:100%;">
            <hr>
            <p id="cardLabels"><a href="announcements/add_announcement.php" style="font-size: 2rem; font-weight: bold;">إضافة إعلان جديد</a></p>
        </div>

        <div class="card">
            <img src="../images/sendMessage.png" alt="Send A Message" style="width:100%;">
            <hr>
            <p id="cardLabels"><a href="discussion_board/admin_home.php" style="font-size: 2rem; font-weight: bold;">لوحة النقاش</a></p>
        </div>
    </div>

    <div class="flex-container middle" style="margin-bottom:5rem;">
        <div class="card">
            <img src="../images/addUserAccount.png" alt="Create Admin Account" style="width:100%;">
            <hr>
            <p id="cardLabels"><a href="create_new_accounts/add_admin_account.php" style="font-size: 2rem; font-weight: bold;">إنشاء حساب مشرف</a></p>
        </div>

        <div class="card">
            <img src="../images/addAdminAccount.png" alt="Create User Account" style="width:100%;">
            <hr>
            <p id="cardLabels"><a href="create_new_accounts/add_user_account.php" style="font-size: 2rem; font-weight: bold;">إنشاء حساب مستخدم</a></p>
        </div>

    </div>
</main>

<footer id="footer" style="text-align: center;">
    <hr>
    <p>  جميع الحقوق محفوظة | وزارة الثقافة &copy;</p>
</footer>

</body>
</html>
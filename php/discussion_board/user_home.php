<?php include('admin_server.php') ?>

<html>
<head>
	<?php include "../metaData.php";?>
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

<header>
	<?php include "discussion_board_navbar.php";?>
</header>
<div>
    <div style="margin-top: 2rem; ">
        <div style="margin:auto; width:98vw; background-color: cadetblue; text-align: center; height: 5vh;">
            <h3 style="background-color: mediumseagreen; height: 7vh; padding: 1rem; font-weight: bold; color: white; font-size: 3rem;">أخر المحادثات</h3>
        </div>

        <div style="width: 98vw; margin: auto;">
            <table style="table-layout: fixed; width: 98vw; border-top: 1px solid white; ">
                <tr style=" color: black; font-weight:bold; font-size: 1.5rem; height: 8vh;">
                    <th style="background-color: mediumseagreen; text-align: center; color: white; font-weight: bold; height: 5vh; font-size: 3rem;">عنوان الحديث</th>
                    <th style="background-color: mediumseagreen; text-align: center; color: white; font-weight: bold; height: 5vh; font-size: 3rem;"> تاريخ الإنشاء</th>
                    <th style="background-color: mediumseagreen; text-align: center; color: white; font-weight: bold; height: 5vh; font-size: 3rem;">المنشئ</th>
                    <th style="background-color: mediumseagreen; text-align: center; color: white; font-weight: bold; height: 5vh; font-size: 3rem;">الإجراءات</th>
                </tr>
				<?php include('display_discussion_admin.php') ?>
        </div>

        <div class="my-quest" id="quest">
            <div>
                <form method="POST" enctype="multipart/form-data" action="admin_home.php">
                    <label style="text-align: center; width: 100%; margin: 2rem auto; font-size: 2.5rem;">عنوان المحادثة</label>
                    <input type="text" class="form-control" name="title" autofocus required>
                    <label style="text-align: center; width: 100%; margin: 2rem auto; font-size: 2.5rem;">المضمون</label>
                    <textarea name="content" class="form-control" rows="10"></textarea>
                    <br>
                    <button class="btn btn-success pull-right" type="submit" name="submit" style="font-size: 2rem;">نشر المحادثة</button>
                    <button class="btn btn-danger pull-right" type="submit" name="submit" style="margin-right: 1rem;">
                        <a href="" class="pull-right" style="text-underline: none; color: white; font-size: 2rem;">إقفال</a>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

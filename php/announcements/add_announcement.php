<?php
include "../connect_database.php";
include "../server.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <title>وزارة الثقافة</title>
      <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
      <meta name="description" content="A Task Manager Tool">
      <meta name="keywords" content="Minister of culture lebanon task manager">
      <meta name="author" content="Anonymous">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" type="image/ico" href="../../images/moclogo.gif" />
      
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.1/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="../../css/Announcements/addAnnouncements.css" rel="stylesheet" media="all">

  </head>

  <body>
  <header>
      <?php include "announcement_navbar.php"; ?>
  </header>
      <div class="bg-dark p-t-100">
          <div class="wrapper wrapper--w900" style="border-radius: 1rem; border: 5px blue solid;">
              <div class="card card-6">
                  <div class="card-heading">
                      <h2 class="title" style="text-align: center; font-size: 4rem;">الإعلانات</h2>
                  </div>
                  <div class="card-body">
                      <form method="POST" enctype="multipart/form-data">
						  <?php include('../errors.php') ?>
                          <div class="form-row">
                              <br><br><br><br>
                              <div class="value">
                                  <input class="input--style-6" type="text" name="title" value="<?php echo isset($_POST['title']) ? $_POST['title'] : '' ?>"  title="Title must be between 5 to 20 characters in length and contain only letters, numbers and periods." required>
                              </div>
                              <div class="name" style="text-align: right; font-size: 2rem;">عنوان الإعلان</div>
                          </div>
                          <div class="form-row">
                              <div class="value">
                                  <div class="input-group">
                                      <input class="input--style-6" type="text" name="body" value="<?php echo isset($_POST['body']) ? $_POST['body'] : '' ?>" title="Title must be between 5 to 20 characters in length and contain only letters, numbers and periods." required>
                                  </div>
                              </div>
                              <div class="name" style="text-align: right; font-size: 2rem;">مضمون الإعلان</div>
                          </div>
                          <div class="form-row">
                              <div class="value">
                                  <div class="input-group js-input-file">
                                      <input class="input-file" type="file"  id="file" name="file">
                                      <label class="label--file" for="file" style="font-size: 1.5rem;">إختار ملف</label>
                                      <span class="input-file__info" style="font-size: 1.5rem;">لم يتم إختيار أي ملف</span>
                                  </div>
                              </div>
                              <div class="name" style="text-align: right; font-size: 2rem;">تحميل ملف</div>
                          </div>
                          <div class="card-footer">
                              <button class="btn btn--radius-2 btn--blue-2" type="submit" name="submit" style="font-size: 2rem;">تحميل</button><br>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
      <!-- Jquery JS-->
      <script src="../../js/jquery/jquery.min.js"></script>

      <!-- Main JS-->
      <script src="../../js/global.js"></script>

  </body>

</html>

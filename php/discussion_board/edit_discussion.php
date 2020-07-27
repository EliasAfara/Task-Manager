<?php include 'edit_function.php';
        include "../connect_database.php"; ?>

<html>
  <head>
    <?php include "../metaData.php";?>
    <!--Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../css/discussion_board/global.css">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="../../css/discussion_board/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../css/discussion_board/bootstrap.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
      <!--Script-->
    <script src="../../js/jquery.js"></script>
    <script src="../../js/bootstrap.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
  </head>
  <body>
   <div class="container" style="margin:8% auto;width:900px;">
     <h2>Edit Topic</h2>
     <hr>
     <div class="panel panel-success">
       <div class="panel-heading">
           <h3 class="panel-title">Topic Details</h3>
       </div>
          <div class="panel-body">
            <form method="POST">
              <input type="text" name="title" class="form-control" value="<?php echo $title;?>">
              <br>
              <textarea name="content" class="form-control"><?php echo $content;?></textarea>
              <br>
              <p class="form-control"><?php echo date("m/d/Y g:i A", strtotime($datetime));?></p>
              <br>
              <input type="submit" name="edit" class="btn btn-success pull-right" value="Update">
            </form>
          </div>
       </div>
     </div>
  </body>
</html>

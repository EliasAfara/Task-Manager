<?php include "../connect_database.php"; ?>
<html>
<head>
	<?php include "../metaData.php";?>
    <link rel="icon" type="image/ico" href="../../images/moclogo.gif" />
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
	<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="../admin_index.php"></a>
            </div>

        </div>
        <!-- /.container-fluid -->
    </nav>
     <div class="container" style="margin:8% auto;width:900px;">

           <h2>Comment</h2>

           <hr>
         <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Edit Comment</h3>

                </div>
                 <div class="panel-body">
                   <form method="POST">

                        <br>
                        <?php include "../connect_database.php";
                        $comment_Id = $_GET['comment_Id'];/*!<Getting the ID value of the selected comment in order to get it's value from the database table which is called tblcomment.*/
                        $sel = mysqli_query($conn,"SELECT * from discussionComments where comment_Id='$comment_Id' ")
                        or die("Connection Failed");/*!<"$sel" is the result returned by "mysqli_query(…)" is the function that executes the SQL queries (Selected query type is Select).*/
                        while($row=mysqli_fetch_assoc($sel)){
                          extract($row);
                            // echo $row['comment']
                        echo  '<input type="text" class="form-control" name="comment" required style="width:50%" value="'?><?php echo $row['comment'];  '">';
                        }
                        ?>
<!--                        <a href="content.php?post_id=--><?php //echo $row['post_Id'] ?><!--">-->
<!--                            <input type="button" class="btn btn-secondary pull-right" value="Cancel">-->
<!--                        </a>-->
                       <input type="submit" name="submit" class="btn btn-success  pull-right" value="Done">
<!--                       <input type="submit" name="submitCancel" class="btn btn-success  pull-right" value="Cancel">-->
                     </form>
                </div>
    </div>


    <?php
	if(isset($_POST['submit'])){
		$comment = $_POST['comment'];
		$comment_Id = $_GET['comment_Id'];
		$sql = mysqli_query($conn,"SELECT * from discussionComments where comment_Id='$comment_Id'");
		$val = mysqli_fetch_assoc($sql);
		$postid = $val['post_Id'];
		$update = mysqli_query($conn,"UPDATE discussionComments set comment='$comment' where comment_Id='$comment_Id'");
		header("Location: content.php?post_id=$postid");

	}
    ?>
	</body>
</html

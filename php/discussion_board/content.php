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
<div class="container" style="margin:7% auto;">
    <div class="panel panel-success">
        <div class="panel-heading">
            <h3 class="panel-title">Discussion</h3>
        </div>
        <div class="panel-body">
            <!-- Display Topic Information (Title, Date and Comment). -->
			<?php include('display_information.php') ?>
            <br>
            <label>Comments</label>
            <br>
            <div id="comments">
                <!-- Display the comments related to the chosen topic. -->
				<?php include('display_comments.php') ?>
            </div>
        </div>
    </div>
    <hr>
    <div class="col-sm-5 col-md-5 sidebar">
        <h3>Comment</h3>
        <form action="add_comment.php" method="POST">
            <label>
                <textarea type="text" class="form-control" name="commenttxt" required rows="5" cols="30" placeholder="Write your comment here"></textarea>
            </label>
            <br><br>
            <input type="hidden" name="postid" value="<?php echo $_GET['post_id']; ?>">
            <input type="submit" name="add_comment" class="btn btn-success pull-right" value="Comment">
        </form>
    </div>
</div>
</body>
</html>

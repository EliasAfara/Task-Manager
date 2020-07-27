<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="topnav" id="myTopnav">
	<?php
        //session_start();
        //include "server.php";
		if($_SESSION['adminFullName']!=''){
			echo '<a href="admin_logIn.php?clicked"> ' . "تسجيل خروج" . '</a>';
			echo '<a href="profiles/admin_profile.php">' . print_r($_SESSION['adminUserName'],true) . '</a>';
			echo '<a href="admin_index.php">' . "الإعدادات" . '</a>';
			if (isset($_GET['clicked'])) {
				session_destroy();
				$_SESSION['adminLogIn'] = '';
				header("Location: admin_logIn.php");
			}
		}else{
		    if (isset($_SESSION['logIn'])!=''){
				echo '<a href="user_logIn.php?clicked"> ' . "تسجيل خروج" . '</a>';
				echo '<a href="profiles/user_profile.php">' . print_r($_SESSION['userUserName'],true) . '</a>';
				echo '<a href="user_index.php">' . "الإعدادات" . '</a>';
				if (isset($_GET['clicked'])) {
					session_destroy();
					$_SESSION['logIn'] = '';
					header("Location: user_logIn.php");
				}
            }else{}
        }

	?>
	<div>
		<a href="javascript:void(0);" class="icon" onclick="myFunction()">
			<i class="fa fa-bars"></i>
		</a>
	</div>
</div>
<style>
	body {
		margin: 0;
		font-family: Arial, Helvetica, sans-serif;
	}

	.topnav {
		width: 100vw;
		overflow: hidden;
		background-color: blue;
	}

	.topnav a {
		width: 33.33%;
		float: left;
		display: block;
		color: #f2f2f2;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
		font-size: 17px;
	}

	.topnav a:hover {
		background-color: white;
		color: black;
	}

	.topnav .icon {
		display: none;
	}

	@media screen and (max-width: 600px) {
		.topnav a:not(:first-child) {display: none;}
		.topnav a.icon {
			float: right;
			display: block;
		}
	}

	@media screen and (max-width: 600px) {
		.topnav.responsive {position: relative;}
		.topnav.responsive .icon {
			position: absolute;
			right: 0;
			top: 0;
		}
		.topnav.responsive a {
			width: 40vw;
			float: none;
			display: block;
			text-align: center;
		}
	}
</style>
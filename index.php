<?php
session_start(); //admin session start
include('../connection.php');
$admin = $_SESSION['admin'];
$sql = mysqli_query($conn,"select * from admin where email='$admin' ");
$admins = mysqli_fetch_assoc($sql);
?>





<!DOCTYPE html>
<html lang="eng">
     <head>
	    <meta charset="utf-8">
	     <title> Online Notice Board Admin Dashboard </title>
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		 <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link href="dashboard.css" rel="stylesheet">
	 </head>
	 
	 <body>
	    
		<!--nav start -->
		<nav class="navbar navbar-inverse navbar-fixed-top">
		    <div class="container-fluid">
			      <ul class="nav navbar-nav navbar-left">
			         <li> <a href="#">Hello <?php echo $admins['name']; ?></a> </li>
			      </ul>
				  <ul class="nav navbar-nav navbar-right">
				    <li><a href="logout.php">Logout</a></li>
				  </ul>
			</div>
		</nav>
	  <!--nav end -->
  
     <div class="container-fluid">
	    <!--side bar -->
		<div class="row">
		     <div class="col-sm-3 col-md-2 sidebar">
			    <ul class="nav nav-sidebar">
				     <li class="active"><a href="index.php">Dashboard<span class="sr-only">(curent)</span></a></li>
				
						  <li> <img title="Upload your profile picture" style="border-radius:50px;" src="../images/vikram.jpg?> width="100" height="100" alt="not found"></li>
						  					
					<li> <a href="index.php?page=update_pass"><span class="glyphicon glyphicon-user"> </span>Update Password </a> </li>
					<li> <a href="index.php?page=manage_users"><span class="glyphicon glyphicon-user"> </span>Manage Users </a> </li>
					<li> <a href="index.php?page=manage_notification"><span class="glyphicon glyphicon-envelope"> </span>Manage Notification </a> </li>
				</ul>
			 </div>
			 <div class="col-sm-9 col-sm-offset-3" style="margin-top:30px;">
			    
				<?php
				@$page=$_GET['page'];
				switch($page){
					case 'update_pass':
					include('updatepass.php');
					break;
					case 'manage_users':
					include('manage_users.php');
					break;
					case 'manage_notification':
					include('manage_notification.php');
					break;
					case 'add_notice':
					include('add_notice.php');
					break;
					case 'update_notice':
					include('update_notice.php');
					break;
					default :
					echo '<font color="red">Welcome !! </font>';
				}
				?>
			 </div>
		</div>
	  </div>
	 </body>
</html>
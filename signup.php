<?php 

include('../connection.php');
extract($_POST);
if(isset($submit)){
	//if admin already exist or not
	$sql = mysqli_query($conn,"select * from admin where email='$e'");
	$r = mysqli_num_rows($sql);
	if($r){
		$msg = '<font color="red"> Admin already exists </font>';
	}
	else{
		$pass= md5($p);
		$sql = mysqli_query($conn,"insert into admin  values('','$n','$e','$pass')");
		$msg = '<font color="blue"> Registration successfull !! </font>';
	}
}

?>




<!DOCTYPE html>
<html>
     <head>
	     <title> Admin  Register </title>
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	 </head>
	 
	 <body>
	    
		<div class="container" style="margin-top:100px;">
		    <div class="jumbotron">
		     <div class="row">
			     <div class="col-md-4 col-md-offset-4">
				  <?php echo @$msg; ?>
				    <h2 > Register Here </h2>
					
				    <form method="post">
					     <div class="form-group">
						     <label  for="name">Name </label>
								 <input type="text" id="name" name="n" class="form-control"  requried/>
						 </div>
						 <div class="form-group">
						     <label  for="email">Email </label>
								 <input type="text" id="name" name="e" class="form-control"  requried/>
						 </div>
						 <div class="form-group">
						     <label  for="pass">Password </label>
								 <input type="password" id="pass" name="p" class="form-control"  requried/>
						 </div>
						 <button type="submit" name="submit" class="btn btn-success btn-block"> Signup </button>
							<br>
							<p align="right"> Already signin ? <a href="login.php"> Login here </a> </p>
					</div>
					</div>
				 </div>
			 </div>
		</div>
		
	 </body>
</html>
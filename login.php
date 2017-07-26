
<?php 

include('../connection.php');
extract($_POST);
if(isset($submit)){
	$pass= md5($p);
	$sql = mysqli_query($conn,"select email,password from admin where email='$e' and password='$pass'");
	$r = mysqli_num_rows($sql);
	if($r){
		session_start();
		$_SESSION['admin']=$e;
		header('location:index.php');
	}
	else{
		
	    $msg = '<font color="red"> Invalid login !! </font>';
	}
}

?>
<!DOCTYPE html>
<html>
     <head>
	     <title> Admin Login </title>
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	 </head>
	 
	 <body>
	    
		<div class="container" style="margin-top:100px;">
		     <div class="row">
			     <div class="col-md-4 col-md-offset-4">
				     <?php  echo @$msg; ?>
				    <div class="panel panel-default">
					     <div class="panel-heading">
						      <h3 class="panel-title"> Please Login in  </h3>
						 </div>
						 <div class="panel-body">
						 <form method="post">
						    <div class="form-group">
							     <label  for="email">Email </label>
								 <input type="email" id="email" name="e" class="form-control"  requried/>
							</div>
							 <div class="form-group">
							     <label  for="pass">Password </label>
								 <input type="password" id="pass" name="p" class="form-control"  requried/>
							</div>
							<button type="submit" name="submit" class="btn btn-success btn-block"> Login </button>
							<br>
							<p align="right"> Don't have an account ? <a href="signup.php"> Register here </a> </p>
						 </form>
						 </div>
					</div>
				 </div>
			 </div>
		</div>
		
	 </body>
</html>
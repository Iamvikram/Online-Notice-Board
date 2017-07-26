<?php
extract($_POST);
   if(isset($save)){
	   
	   if($np == $cnp){
		  $pass=md5($np);
		   $e =$_SESSION['admin'];
		  $sql = mysqli_query($conn,"update admin set password='$pass' where email='$e' ");
		  $msg = '<font color="blue">Password updated successfully!!!</font>';
		  
	   }
	   else{
		   $msg ='<font color="red">Password not match!!!</font>';
	   }
   }
?>















<h2>Update Your Password </h2>
<form method="post">
    <div class="row">
	  <div class="col-sm-4">
	    <?php  echo @$msg; ?>
	  </div>
	 </div>
     <div class="row">
     <div class="form-group  col-sm-4">
	    
	    Old Password  <input type="password" name="p" class="form-control"/>
	 </div>
	 </div>
	 <div class="row">
	 <div class="form-group  col-sm-4">
	    New Password  <input type="password" name="np" class="form-control"/>
	 </div>
	 </div>
	 <div class="row">
	 <div class="form-group col-sm-4">
	    Confirm New Password  <input type="password" name="cnp" class="form-control"/>
	 </div>
	 </div>
	  
	 <button type="submit" name="save" class="btn btn-success">Update Password </button>
	 <button type="reset" class="btn btn-success"> Reset </button>
	 
 </form>

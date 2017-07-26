<?php
  //include('connection.php');
  extract($_POST);
  if(isset($save)){
	  $image = $_FILES['image']['name'];
	  $e =$_SESSION['user'];
	  $re = mysqli_query($conn,"update user set image = '$image' where email = '$e' ");
	  move_uploaded_file($_FILES['image']['tmp_name'],"../userImages/$e/".$_FILES['image']['name']);
	  
	  $msg = "<font color='blue'> Profie Pic Updated Successfully!! </font>";
  }

?>








<h3 align="center">Update Your Image </h3>
<form method="post" enctype="multipart/form-data">
 <table class="table table-bordered">
    <tr>
	 <td colspan="2"><?php echo @$msg; ?> </td>
	</tr>
 <tr>
 <td align="center"> Upload Your Image </td>
  <td> <input type="file" name="image" class="form-control"/></td>
 </tr>
 <tr>
     <td colspan="2" align="center"><button type="submit" name="save" class="btn btn-success">Update Profie Pic</button></td>
 </tr>
 </table>

</form>
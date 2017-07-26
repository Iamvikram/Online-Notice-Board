<?php
	extract($_POST);
	//check user already exist or not
	if(isset($save)){
			//dob
         $dob=$yy."-".$mm."-".$dd;

      //hobbies
        $hob=implode(",",$chlist);


        //encrypt your password
          $pass=md5($pass);
			$sql=mysqli_query($conn,"update  user set name ='$n', email='$e',mobile='$mobile', gender='$g',hobbies='$hob',dob='$dob' where email='".$_SESSION['user']."'");
			$err= "<font color='green'>Profile updated  Successfully !!</font>";
	}
?>
<h2>Update Your Profile </h2>
<form method="post" enctype="multipart/form-data">
     <table class="table table-bordered">
	    <tr>
		  <td colspan="2"> <?php  echo @$err; ?> </td>
		</tr>
	     <tr>
		     <td > Enter Your Name </td>
			 <td> <input type="text" name="n" class="form-control" required /></td>
		  </tr>
		  <tr>
		     <td> Enter Your Email </td>
			 <td> <input type="email" name="e" class="form-control" required /></td>
		  </tr>
		  <tr>
		     <td> Enter Your Mobile </td>
			 <td> <input type="number" name="mobile" class="form-control" required /></td>
		  </tr>
		  <tr>
		     <td> Select Your Gender </td>
			 <td> Male <input type="radio" name="g" value="m"/>  Female  <input type="radio" name="g" value="f"/> </td>
		  </tr>
		  <tr>
		     <td> Choose Your Hobbies </td>
			 <td> Playing <input type="checkbox" name="chlist[]" value="playing"/>  
			 Reading  <input type="checkbox" name="chlist[]" value="reading"/>  
			 Singing  <input type="checkbox" name="chlist[]" value="singing"/>
			 </td>
		  </tr>
		  <tr>
		   <td> Enter Your DOB </td>
		   <td>
		         <select name="yy">
				    <option  value=""> Year</option>
					<?php
					 for($i=1900;$i<2016;$i++){
						 echo "<option value='$i'>$i</optio>";
					 }
					?>
				 </select>
				 <select name="mm">
				    <option  value=""> Month</option>
					<?php
					 for($i=1;$i<=12;$i++){
						 echo "<option value='$i'>$i</optio>";
					 }
					?>
				 </select>
				 <select name="dd">
				    <option  value=""> Date</option>
					<?php
					 for($i=1;$i<=31;$i++){
						 echo "<option value='$i'>$i</optio>";
					 }
					?>
				 </select>
		   </td>
		  </tr>
		  <tr>
		  <td colspan="2" align="center">
		    <button type="submit" class="btn btn-success"  name="save">Submit</button>
			<button type="reset" class="btn btn-success"  name="reset">Reset</button>
			</td>
		  </tr>
	 </table>
</form>
 <?php
 
 extract($_POST);
 if(isset($send)){
	 
	 foreach($user as $u){
		 mysqli_query($conn,"insert into notice values('','$u','$subject','$details',now())");
	 }
	 $msg = '<font colo="blue">Notice sent successfully !! </font>';
 }
 
 ?>
 
 
 <h2 style="color:green">Add New Notice Here </h2>
 <form method="post">
     <div class="row">
	    <div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$msg ; ?> </div>
	 </div>
	  <div class="row">
	    <div class="col-sm-2">Enter Your Subject</div>
		<div class="col-sm-4"><input type="text" name ="subject" class="form-control" required /> </div>
	 </div>
	 <br>
	 <div class="row">
	    <div class="col-sm-2">Enter Your Details</div>
		<div class="col-sm-4"><textarea  name ="details" class="form-control" rows="5" required /></textarea> </div>
	 </div>
     <br>
	  <div class="row">
	    <div class="col-sm-2">Select Users</div>
		<div class="col-sm-4">
		     <select name="user[]" multiple="multiple" class="form-control">
			     <option> Select users </option>
				 <?php
				    $sql = mysqli_query($conn,"select name,email from user");
					while($r = mysqli_fetch_array($sql)){
						echo "<option value=' ".$r['email']." '>".$r['name']."</option>";
					}
					
				 ?>
            </select>			 
		 </div>
	 </div>
	 <br>
      <div class="row">
	     <div class="col-sm-4 col-sm-offset-2">
		    <button type="submit" name="send" class="btn btn-success btn-sm">Send Notice</button>
			<button type="reset"  class="btn btn-success btn-sm">Reset</button>
		  </div>
	  </div>
 
 </form>